@extends('templete')
@section('conteudo')


{{Form::open(options)}}
<div class="col-lg-12">
                        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2">Registar Especialidade</h4>
                                        </div>
                                        <div class="modal-body">
                                           <form role="form">
                                        <div class="form-group">
                                            <label>Especialidade </label>
                                            <input class="form-control" placeholder="Digite Especialidades do Médico" name="especialidade" />
                                                                                  
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Registar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
@stop