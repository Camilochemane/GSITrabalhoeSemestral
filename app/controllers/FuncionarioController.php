<?php
class FuncionarioController extends BaseController
{
	
	public function getRegistarFuncionario()
	{
		DB::table('funcionarios')->insert(array('Apelido'=>Input::get('Apelido'),'Nome'=>Input::get('Nome'),
			'Sexo'=>Input::get('Sexo'),'DataNascimento'=>Input::get('DataNascimento'),'BINr'=>Input::get('BINr'),
			'DataEmissao'=>Input::get('DataEmissao'),'Morada'=>Input::get('Morada'),
			'Telefone'=>Input::get('Telefone'),'Email'=>Input::get('Email'),'Funcao'=>Input::get('Funcao'),'Especialidade'=>Input::get()));

		return Redirect::to('paciente/formpaciente');
	}


	//public function getDados()
  //{
    	
    	//$especialidade= DB::table('especialidade')->get();
    	// $nome=DB::table('users')->get();
  	//	$massango=DB::table('especialidade')->get();
    	
    	//return View::make('admin.registar',compact('especialidade'));
   // return View::make('admin.registar',compact('massango'));

    //}

}