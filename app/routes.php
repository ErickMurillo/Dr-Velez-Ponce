<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function(){
	return View::make('inicio');
});

Route::get('foro', function(){
	$temas = DB::table('temas')->paginate(10);
	//$usuarios = User::where('role_id', '=', 1)->get();	
	return View::make('Foro.foro')->with('temas', $temas);
});



Route::post('usuarios/validar', array('uses'=> 'UsuariosController@validateLogin'));// se valida en usuario
Route::get('login', array('uses' => 'UsuariosController@viewLogin'));
Route::get('usuarios/logout', array('uses'=> 'UsuariosController@getLogout'));

/* *******************************************Admin********************************************************************* */
Route::group(array('before' => 'auth'), function()
{
	Route::get('administrador', function(){
		return View::make('admin');
	});

	Route::post('administrador/usuarios/register', array('uses' => 'UsuariosController@register'));// se registra el usuario en la BD

	Route::get('administrador/temas', function(){
		$temas = DB::table('temas')->paginate(10);
		return View::make('administrador.temasadmin')->with('temas',$temas);
	});

	Route::get('administrador/usuarios', function(){
		$usuarios = User::all();
		//$usuarios = User::where('role_id', '=', 1)->get();	
		return View::make('administrador.usuariosadmin')->with('usuarios', $usuarios);
	});

	Route::get('administrador/tema/borrar/{id?}', array('uses' => 'TemasController@borrar'));
	Route::get('administrador/del/comentario/{id}', array('uses' => 'ComentariosController@del'));

});

/* *******************************************Temas********************************************************************* */

Route::post('foro/validartema',array('uses'=>'TemasController@validateTema'));
Route::post('foro/registerTema', array('uses' => 'TemasController@registerTema'));
Route::get('foro/ver/{id?}', array('uses' => 'TemasController@show'));

/* *******************************************Comentarios********************************************************************* */
	
Route::post('foro/registerComentario', array('uses' => 'ComentariosController@registerComentario'));


Route::get('comentarios', function(){	
	return View::make('comentario');
});


Route::post('', function(){

	$data = array('name' => Input::get('nombre'),'titulo' => Input::get('titulo'));

	Mail::send('emails.welcome', $data, function($message)
	{
		$message->to('erickmurillo22@gmail.com', 'Cliente')->subject('Tema Nuevo Foro DrVelezPonce');
	});

	Session::flash('message', 'Mensaje enviado');
	return Redirect::back();
});


