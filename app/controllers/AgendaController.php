<?php 

/**
* 
*/
class AgendaController extends BaseController
{
	
	public function postAgendasave()
	{
       DB::table('agenda')->insert(array('nome'=>Input::get('nome'), 
                   'data'=>Input::get('data'), 
                   'horaInicio'=>Input::get('horaInicio'),
                   'horaFim'=>Input::get('horaFim')));

		return Redirect::to('agenda/formagenda');
	}


	public function getFormagenda()
	{
		$medico= DB::table('users')->where('tipo_id','=', 2)->get();
		return View::make('admin.registaragenda', compact('medico'));
	}
}