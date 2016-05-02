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
                        <br />
                        <br />
                        <br />

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class=""></i></h2>

    </div>
    <div class="box-content">
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid"><div class="row"><div class="col-md-6"><div id="DataTables_Table_0_length" class="dataTables_length"><label><select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="col-md-6"><div class="dataTables_filter" id="DataTables_Table_0_filter"><label>Pesquisar: <input type="text" aria-controls="DataTables_Table_0" placeholder="Pesquisar"></label></div></div></div><table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
    <thead>
    <tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 215px;">Apelido</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 181px;">Nome</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 97px;">Telefone</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 97px;">Morada</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 382px;">Accoes</th></tr>
    </thead>
    
    <tbody role="alert" aria-live="polite" aria-relevant="all">
           
          @foreach($pacientes as $pac )
            <tr class="odd">
                <td class=" sorting_1" value="{{$pac->PacienteID}}">{{$pac->Apelido}}</td>
                <td class=" sorting_1" value="{{$pac->PacienteID}}">{{$pac->Nome}}</td>
                <td class="center " value="{{$pac->PacienteID}}">{{$pac->Telefone}}</td>
                <td class="center " value="{{$pac->PacienteID}}">{{$pac->Morada}}</td>
                <td class="center ">
                    <span class="label-default label label-danger">Banned</span>
                </td>
                <td class="center ">
                    <a class="btn btn-success" href="#">
                        <i class="icon-view"></i>
                        View
                    </a>
                    <a class="btn btn-info" href="#">
                        <i class="icon-edit"></i>
                        Edit
                    </a>
                    <a class="btn btn-danger" href="#">
                        <i class="icon-remove"></i>
                        Delete
                    </a>
                </td>
            </tr>
          @endforeach
    
    </tbody>
    </table>
    
            <div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">5</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">6</a></li><li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li></ul></div></div></div>
    </div>
    </div>
    </div>
    </div>
    <!-- /span-->

    </div>


@stop