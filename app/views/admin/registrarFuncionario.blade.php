@extends('templete')
@section('conteudo')
<div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Cadastrar Funcionário</h5>
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
                            {{Form::open(array('url'=>'funcionario/registarfuncionario', 'class'=>'form-horizontal', 'id'=>'block-validate', 'novalidate'=>'novalidate'))}}

                      
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
                                    <label class="control-label col-lg-4" for="dp1">Data de Nascimento</label>

                                  <div class="col-lg-3">
                                     <input type="text" class="form-control" value="02-16-2012" id="dp1" />
                                 </div>
                                 </div>
                   
                                 <div class="form-group">
                                            <label class="control-label col-lg-4">Numero B.I.</label>
                                            <div class="col-lg-4">
                                                <input id="txtBINr" name="NumeroBI" class="form-control" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                    <label class="control-label col-lg-4" for="dp1">Data de Emissão</label>

                                  <div class="col-lg-3">
                                     <input type="text" class="form-control" value="02-16-2012" id="dp1" />
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

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Função</label>
                                            <div class="col-lg-4">
                                                <input id="txtEmail" name="funcao" class="form-control" type="text">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Especialidade</label>

                                            <div class="col-lg-4">
                                                <select  class="form-control" name="tipo" id="url2">
                                                    @foreach($especialidade as $esp)
                                                        <option value="{{$esp->especialidadeid}}">{{$esp->designacao}}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                {{-- <div class="col-md-4 btn-group">
                                                <button class="btn btn-primary"><i class="icon-pencil icon-plus"></i>Adicionar</button>   
                                                </div> --}}
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