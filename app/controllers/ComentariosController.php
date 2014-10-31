<?php 

	
class ComentariosController extends BaseController {

	/**
	 * [registerComentario description]
	 * @return [type] [description]
	 */
	public function registerComentario(){
		if(Input::get()){
			if($this->ValidateForm(Input::all()) === true ){
				$comentario = new Comentario();
				$comentario->comentario = Input::get('comentario');
				$comentario->id_tema = Input::get('id');
				$comentario->nombre = Input::get('nombre');

				if($comentario->save()){
$data = array('name' => Input::get('nombre'),'title' => Input::get('titulo'));

	Mail::send('emails.welcome2', $data, function($message)
	{
		$message->to('juancarlos@drvelezponce.com', 'Cliente')->subject('Comentario Nuevo al Foro DrVelezPonce');
	});
					Session::flash('message', 'Comentario Agregado Con Exito');
					return Redirect::back();
				}

			}else{
				return Redirect::to('foro/ver/{id?}')->withErrors($this->validateForm(Input::all()))->withInput();
			}
		}else{
			return View::make('Foro.comentario');
		}
	}

	/**
	 * [del description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function del($id){

		$comentario = Comentario::find($id);

		$comentario->delete();

		Session::flash('message', 'Comentario Eliminado Con Exito');
		return Redirect::back();		
	}

	/**
	 * [ValidateForm description]
	 * @param array $inputs [description]
	 */
	private function ValidateForm($inputs = array()){
		$rules = array(
			'nombre' => 'required',
			'comentario' => 'required'
			);
		$message = array(
			'required' => 'el :attribute es requerido'
			);
		$validation = Validator::make($inputs, $rules, $message);

		if($validation->fails()){
			return $validation;
		}else{
			return true;
		}

	}
}
 ?>