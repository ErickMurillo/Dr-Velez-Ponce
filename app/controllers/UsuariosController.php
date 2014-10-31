<?php 
	
	
class UsuariosController extends BaseController{

	public function validateLogin(){

		if($this->validateFormsLogin(Input::all()) === true){			
			$userdata = array(
				'username' =>Input::get('username'),
				'password' =>Input::get('password')
				);

			if(Auth::attempt($userdata)){
				Session::flash('message', 'Bienvenido');
				return Redirect::to('administrador/temas');		
				
			}else{
				Session::flash('message', 'Error al iniciar session');
				return Redirect::to('login');
			}
		}else{
			return Redirect::to('login')->withErrors($this->validateFormsLogin(Input::all()))->withInput();		
		}		
	}

		private function validateFormsLogin($inputs = array()){
		$rules = array(			
			'username' => 'required',			
			'password' => 'required',			
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

	public function viewLogin(){
		return View::make('administrador.login');
	}


	public function register(){
		if(Input::get()){			
			if($this->validateForms(Input::all()) === true){
				$user = new user();
				$user->nombre = Input::get('nombre');
				$user->username = Input::get('username');				
				$user->password = Hash::make(Input::get('password'));
				$user->rol = 'Administrador';	

				if($user->save()){					
					Session::flash('message', 'Usuario Registrado con exito');
					return Redirect::back();
				}
			}else{
				return Redirect::back()->withErrors($this->validateForms(Input::all()))->withInput();
			}
		}else{
			return View::make('usuarios.login');
		}
	}



	private function validateForms($inputs = array()){
		$rules = array(
			'nombre' => 'required|min:4',
			'username' => 'unique:usuarios|required|min:4',			
			'password' => 'confirmed|required|min:4',
			'password_confirmation' => 'required|min:4',
			);
		$message = array(
			'required' => 'El campo :attribute es requerido',
			'unique' => 'El :attribute ya esta en uso'
			);
		$validate = Validator::make($inputs, $rules, $message);

		if($validate->fails()){
			return $validate;
		}else{
			return true;
		}
	}

	public function getLogout(){
		Auth::logout();
		
		return Redirect::to('/');
	}


}
?>