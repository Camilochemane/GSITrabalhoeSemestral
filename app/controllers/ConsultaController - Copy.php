<?php 


/**
* 
*/
class ConsultaController extends BaseController
{
	
	public function postSaveconsulta()
	{
		return Redirect::to('consulta/formconsulta');
		
	}

   public function getFormconsulta()
   {
   	$medico= DB::table('users')->where('tipo_id','=', 2)->get();
   	$paciente= DB::table('pacientes')->get();
   	$agenda = DB::table('agenda')->get();
   	$especialidade = DB::table('especialidade')->get();
    return View::make('secretaria.marcarconsulta', compact('paciente','agenda','medico','especialidade'));
   }

}