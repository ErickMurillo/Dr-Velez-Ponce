<?php

class TemasController extends BaseController {


	public function show($id){

		$tema = Tema::find($id);
		return View::make('Foro.comentario')->with('tema', $tema);
	}


	private function validateFormsTema($inputs = array()){
		$rules = array(			
			'nombre' => 'required|min:4',			
			'titulo' => 'required|min:5',
			'contenido'=>'required|max:200',			
			);
		$message = array(
			'required' => 'El campo :attribute es requerido',			
			);
		$validate = Validator::make($inputs, $rules, $message);

		if($validate->fails()){
			return $validate;
		}else{
			return true;
		}
	}

		
	public function registerTema(){
		if(Input::get()){			
			if($this->validateFormsTema(Input::all()) === true){
				$tema = new Tema();
				$tema->nombre = Input::get('nombre');
				$tema->titulo = Input::get('titulo');				
				$tema->contenido = Input::get('contenido');		

				if($tema->save()){
                                        $data = array('name' => Input::get('nombre'),'titulo' => Input::get('titulo'));

	                                Mail::send('emails.welcome', $data, function($message)
	                                 {
		                            $message->to('juancarlos@drvelezponce.com', 'Cliente')->subject('Tema Nuevo Foro DrVelezPonce');
	                                  });					
					Session::flash('message', 'Tema Registrado con exito');
					return Redirect::back();
				}
			}else{
				return Redirect::back()->withErrors($this->validateFormsTema(Input::all()))->withInput();
			}
		}else{
			return View::make('Foro.foro');
		}
	}


	public function borrar($id){

		$tema = Tema::find($id);
		
		$comentarios = Comentario::where('id_tema', '=',$tema->id)->get();
   		
  		 foreach($comentarios as $item){
   		   $item->delete();
   		}   		
		
		$tema->delete();

		Session::flash('message', 'Tema Eliminado');
		return Redirect::back();
	}


}
 ?>
