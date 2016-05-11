<?php 

/**
* 
*/
class RegistarController extends BaseController
{
	
    public function postSave()
    {

    	$user= new User;
        $user->apelido= Input::get('apelido');
		$user->nome= Input::get('nome');
        $user->genero= Input::get('genero');
		$user->tipo_id=Input::get('tipo');
        $user->datanascimento=Input::get('datanascimento');
        $user->morada=Input::get('morada');
        $user->telefone=Input::get('telefone');
        $user->binr=Input::get('binr');
        $user->dataemissao=Input::get('dataemissao');
		$user->username=Input::get('email');
        $user->especialidade=Input::get('especialidade');
		$user->password= Hash::make(Input::get('password'));
		$user->save();

    	// nome da rota e nome do metodo
    	return Redirect::to('registar/registar');
    }

    public function getRegistar()
    {
    	
    	$tipoFun= DB::table('tipo')->where('id','<>',1)->get();
    	// $nome=DB::table('users')->get();
        $massango=DB::table('especialidade')->get();
    	$utilizadores=DB::table('users')->join('tipo', 'users.tipo_id', '=', 'tipo.id')
    	->select('users.nome as nome','users.username as email','tipo.nome as tipo', 'users.id as id')->get();

    	return View::make('admin.registar',compact('tipoFun', 'utilizadores','massango'));

    }
    

    public function postSavetipo()
    {
    	
    	DB::table('tipo')->insert(array('nome'=>Input::get('tipo')));
    	return Redirect::to('registar/registar');
    }

    public function postSaveespecialidade()
    {
        
        DB::table('especialidade')->insert(array('designacao'=>Input::get('especialidade')));
        return Redirect::to('registar/registar');
    }
}