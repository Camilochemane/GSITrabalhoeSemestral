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

                                   {{Form::open(array('url'=>'paciente/savepaciente', 'class'=>'form-horizontal', 'id'=>'block-validate', 'novalidate'=>'novalidate'))}}

                      
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Apelido</label>
                                            <div class="col-lg-4">
                                                <input id="txtApelido" name="Apelido" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Nome</label>

                                            <div class="col-lg-4">
                                                <input id="txtEmail" name="Nome" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Sexo</label>

                                            <div class="col-lg-4">
                                                <input id="txtSexo" name="Sexo" class="form-control" type="text">
                                            </div>
                                        
                                        </div>

                                   <div class="form-group">
                       			 		<label class="control-label col-lg-4" >Data de Nascimento</label>
                        				<div class="col-lg-3">
                           			 	<div class="input-group input-append  date" id="dpDataNascimento" data-date="12-02-2012"
                                	 	data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                               		 	<input class="form-control" type="text" value="12-02-2012" readonly="" />
                                		<span class="input-group-addon add-on"><i class="icon-calendar"></i></span>
                           			 </div>
                       				 </div>
                   				 </div>
                       
                       					<div class="form-group">
                                            <label class="control-label col-lg-4">Numero B.I.</label>
                                            <div class="col-lg-4">
                                                <input id="txtBINr" name="NumeroBI" class="form-control" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group">
                       			 		<label class="control-label col-lg-4" >Data de Emissao</label>
                        				<div class="col-lg-3">
                           			 	<div class="input-group input-append  date" id="dpDataEmissao" data-date="12-02-2012"
                                	 	data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                               		 	<input class="form-control" type="text" value="12-02-2012" readonly="" />
                                		<span class="input-group-addon add-on"><i class="icon-calendar"></i></span>
                           			 </div>
                       				 </div>
                   					 </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Morada</label>

                                            <div class="col-lg-4">
                                                <input id="txtMorada" name="Morada" class="form-control" type="text">
                                            </div>
                                        
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-lg-4">Telefone</label>

                                            <div class="col-lg-4">
                                                <input id="txtTelefone" name="Telefone" class="form-control" type="text">
                                            </div>
                                        
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Email</label>
                                            <div class="col-lg-4">
                                                <input id="txtEmail" name="Email" class="form-control" type="text">
                                            </div>
                                        </div>
                                        

                                            <div class="form-actions no-margin-bottom" style="text-align:center;">
                                            <input value="Cadastrar" class="btn btn-primary btn-lg " type="submit">
                                        </div>

                                    {{Form::close()}}
                                </div>
                            </div>
    
                        </div>
@stop