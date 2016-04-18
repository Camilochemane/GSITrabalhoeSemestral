@extends('templete')

@section('conteudo')
<div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Registar Funcionario</h5>
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
                                   
                                     {{Form::open(array('url'=>'registar/save', 'class'=>'form-horizontal', 'id'=>'block-validate', 'novalidate'=>'novalidate'))}}
                     
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Nome</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="required2" name="nome" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">E-mail</label>

                                            <div class="col-lg-4">
                                                <input type="email" id="email2" name="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Password</label>

                                            <div class="col-lg-4">
                                                <input type="password" id="password2" name="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Confirm Password</label>

                                            <div class="col-lg-4">
                                                <input type="password" id="confirm_password2" name="confirm_password" class="form-control">
                                            </div>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Tipo</label>

                                            <div class="col-lg-4">
                                                <select  class="form-control" name="tipo" id="url2">
	                                                @foreach($tipoFun as $tipo)
	                                                	<option value="{{$tipo->id}}">{{$tipo->nome}}
	                                                	</option>
	                                                @endforeach
                                                </select>

                                                {{-- <div class="col-md-4 btn-group">
                                                <button class="btn btn-primary"><i class="icon-pencil icon-plus"></i>Adicionar</button>   
											    </div> --}}
                                            </div>
                                        </div>
                                        
                                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                                            <input type="submit" value="Gravar" class="btn btn-primary btn-lg ">
                                           {{--  <input type="" value="Cancelar" class="btn btn-primary btn-lg "> --}}
                                        </div>
                                    {{Form::close()}}
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>

<div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class=""></i></h2>

    </div>
    <div class="box-content">
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid"><div class="row"><div class="col-md-6"><div id="DataTables_Table_0_length" class="dataTables_length"><label><select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="col-md-6"><div class="dataTables_filter" id="DataTables_Table_0_filter"><label>Pesquisar: <input type="text" aria-controls="DataTables_Table_0" placeholder="Pesquisar"></label></div></div></div><table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
    <thead>
    <tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 215px;">Nome</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 181px;">Email</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 97px;">Tipo</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 97px;">Estado</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 382px;">Accoes</th></tr>
    </thead>
    
    <tbody role="alert" aria-live="polite" aria-relevant="all">
           
          @foreach($utilizadores as $utliz )
		    <tr class="odd">
		        <td class=" sorting_1" value="{{$utliz->id}}">{{$utliz->nome}}</td>
		        <td class="center " value="{{$utliz->id}}">{{$utliz->email}}</td>
		        <td class="center " value="{{$utliz->id}}">{{$utliz->tipo}}</td>
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
    <!--/span-->

    </div>
@stop