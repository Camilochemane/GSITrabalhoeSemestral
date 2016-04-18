<?php 


/**
* 
*/
class AutenticacaoController extends BaseController
{
	
	public function postLogin()
	{
		
		if(Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password'))))
			  {

			  	if (Auth::user()->tipo_id==1) {
			  		return View::make('admin.index');
			  	}

			  	if (Auth::user()->tipo_id==2) {
			  		return View::make('medico.index');
			  		
			  	}
              
               if (Auth::user()->tipo_id==3) {
			  		
			  		return View::make('secretaria.index');
			  	}
               
               
			  }else{

                   return View::make('/');

			  }


	}

	
}