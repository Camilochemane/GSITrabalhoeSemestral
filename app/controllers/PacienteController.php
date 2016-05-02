<?php 

/**
* 
*/
class PacienteController extends BaseController
{
	
	public function postSavepaciente()
	{
		
		DB::table('pacientes')->insert(array('Apelido'=>Input::get('Apelido'),'Nome'=>Input::get('Nome'),
			'Sexo'=>Input::get('Sexo'),'DataNascimento'=>Input::get('DataNascimento'),'BINr'=>Input::get('BINr'),
			'DataEmissao'=>Input::get('DataEmissao'),'Morada'=>Input::get('Morada'),
			'Telefone'=>Input::get('Telefone'),'Email'=>Input::get('Email')));

		return Redirect::to('paciente/formpaciente');
		
	}

	public function getFormpaciente(){
		$pacientes=DB::table('pacientes')->get();
		//return View::make('secretaria.Dados');
	return View::make('secretaria.registarpaciente',compact('pacientes'));


	}

	//public function getDados()
	//{
	//$pacientes=DB::table('pacientes')->select('pacientes.apelido as apelido','pacientes.nome as nome',
	//	'pacientes.telefone as telefone','pacientes.morada as morada')->get();
	//	$pacientes=DB::table('pacientes')->get();
	//	return View::make('secretaria.Dados');
	//}
	
	
	

	
}