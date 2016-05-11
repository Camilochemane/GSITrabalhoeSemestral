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
    return View::make('secretaria.marcarconsulta', compact('paciente','agenda','medico',
      'especialidade'));
  }

  public function postForm2consulta()
  {
    $user = Input::get('nomeEspecialidade');
    $medicos = DB::table('users')
              ->where('especialidade', Input::get('nomeEspecialidade'))
              ->get();
              
              

    // Input::get('nomeEspecialidade');
    

    return View::make('secretaria.marcarconsulta2', compact('user', 'medicos'));
  }

}