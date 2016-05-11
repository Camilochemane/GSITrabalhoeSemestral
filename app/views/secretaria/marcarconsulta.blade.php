@extends('templete')

@section('conteudo')

{{ Form::open(array('url'=>'consulta/form2consulta')) }}

            <div class="inner" >
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Formulario de Marcacao de consultas</h2>
                    </div>
                </div>

                <hr />  
                <div class="row">
                  <div class="col-lg-12">
                     
         <div class="panel panel-default">
                        <div class="panel-heading">
                            Vertical Wizard
                        </div>
                        <div class="panel-body">
                            <div id="wizardV" >
                <h2> Paciente </h2>
                <section> 

                           <!-- <form role="form"> -->
                                        <div class="form-group">

                                        <label>Nome Paciente</label>
                                        <select  class="form-control" name="nomePaciente">
                                                    @foreach($paciente as $paci)
                                                        <option value="{{$paci->PacienteID}}">{{$paci->Nome}}
                                                        </option>
                                            @endforeach
                                                </select> 
                                        </div>
                                       
                                       <div class="form-group">
                                            <label>Telefone</label>
                                            <input class="form-control" />
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" />
                                            <p class="help-block" name="email"></p>
                                        </div>
                                    <!-- </form> -->
                    
                </section>
                <h2> Data </h2>
                <section>
                   <!-- <form role="form"> -->
                       <div class="form-group">
                            <label>Especialidade</label>
                            <select  class="form-control" name="nomeEspecialidade">
                                @foreach($especialidade as $esp)
                                    <option value="{{$esp->EspecialidadeID}}">{{$esp->Designacao}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                       
                    <!-- </form> -->
                </section>

                
            </div>
                             
                        </div>
                    </div>
                 </div>
                </div>

            </div>





        

{{ Form::close() }}


@stop