<?php 

/**
* 
*/
class PacienteController extends BaseController
{
	
	public function postSavepaciente()
	{
		$pacientes= new Paciente;
		$pacientes->Apelido= Input::get('Apelido');
		$pacientes->Nome=Input::get('Nome');
		$pacientes->Sexo=Input::get('Sexo');
		$pacientes->DataNascimento=Input::get('DataNascimento');
		$pacientes->BINr=Input::get('BINr');
		$pacientes->DataEmissao=Input::get('DataEmissao');
		$pacientes->Morada=Input::get('Morada');
		$pacientes->Telefone=Input::get('Telefone');
		$pacientes->Email=Input::get('Email');
		
		$paciente->save();

		return Redirect::to('paciente/registarpaciente');
	}


	
}