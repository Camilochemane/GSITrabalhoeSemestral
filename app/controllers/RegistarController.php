<?php 

/**
* 
*/
class RegistarController extends BaseController
{
	
    public function postSave()
    {

    	$user= new User;
		$user->nome= Input::get('nome');
		$user->tipo_id=Input::get('tipo');
		$user->username=Input::get('email');
		$user->password= Hash::make(Input::get('password'));
		$user->save();

    	// nome da rota e nome do metodo
    	return Redirect::to('registar/registar');
    }

    public function getRegistar()
    {
    	
    	$tipoFun= DB::table('tipo')->where('id','<>',1)->get();
    	// $nome=DB::table('users')->get();
    	$utilizadores=DB::table('users')->join('tipo', 'users.tipo_id', '=', 'tipo.id')
    	->select('users.nome as nome','users.username as email','tipo.nome as tipo', 'users.id as id')->get();

    	return View::make('admin.registar',compact('tipoFun', 'utilizadores','nome'));

    }

    public function postSavetipo()
    {
    	
    	DB::table('tipo')->insert(array('nome'=>Input::get('tipo')));
    	return Redirect::to('registar/registar');
    }
}