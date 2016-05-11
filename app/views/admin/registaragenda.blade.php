@extends('templete')

@section('conteudo')


<div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Cadastrar Paciente</h5>
                                    <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                <div class="btn-group">
                                                    <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse" href="#collapseOne">
                                                        <i class="icon-chevron-up"></i>
                                                    </a>
                                                    <button class="btn btn-xs btn-danger close-box">
                                                        <i class="icon-remove"></i>
                                                    </button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </header>
                                <div id="collapseOne" class="accordion-body collapse in body">

                                   {{Form::open(array('url'=>'agenda/agendasave', 'class'=>'form-horizontal', 'id'=>'block-validate', 'novalidate'=>'novalidate'))}}

                                   		<div class="form-group">
                                            <label class="control-label col-lg-4">Medico</label>
                                            <div class="col-lg-4">
                                                <select  class="form-control" name="nome" id="url2">
	                                                @foreach($medico as $medi)
	                                                	<option value="{{$medi->id}}">{{$medi->nome}}
	                                                	</option>
	                                                @endforeach
                                                </select>
                                            </div>
                                        </div>

                                 		<div class="form-group">
                                            <label class="control-label col-lg-4">Date</label>

                                            <div class="col-lg-4">
                                                <input type="date" id="date2" name="data" class="form-control">
                                            </div>
                                        </div>

                                         <div class="form-group">
						                 <label class="control-label col-lg-4">Hora Inicio</label>

						                        <div class="col-lg-3">
						                            <div class="input-group bootstrap-timepicker">
						                                <input class="timepicker-24 form-control" type="text" name="horaInicio" />
						                                <span class="input-group-addon add-on"><i class="icon-time"></i></span>
						                            </div>
						                        </div>
						                    </div>

						                     <div class="form-group">
					                        <label class="control-label col-lg-4">Hora Fim</label>

					                        <div class="col-lg-3">
					                            <div class="input-group bootstrap-timepicker">
					                                <input class="timepicker-24 form-control" type="text" name="horaFim" />
					                                <span class="input-group-addon add-on"><i class="icon-time"></i></span>
					                            </div>
					                        </div>
					                    </div>

                                            <div class="form-actions no-margin-bottom" style="text-align:center;">
                                            <input value="Cadastrar" class="btn btn-primary btn-lg " type="submit">
                                        </div>

                                    {{Form::close()}}
                                </div>
                            </div>
    
                        </div>
                        <br />
                        <br />
                        <br />

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class=""></i></h2>

    </div>
    </div>
    </div>
    <!-- /span-->

    </div>


@stop