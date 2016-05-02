
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->
<head>
   
     <meta charset="UTF-8" />
    <title>BCORE Admin Dashboard Template | Blank Page</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    

    {{ HTML::style ("assets/plugins/bootstrap/css/bootstrap.css") }}
    {{ HTML::style ("assets/css/main.css") }}
    {{ HTML::style ("assets/css/theme.css") }}
    {{ HTML::style ("assets/css/MoneAdmin.css") }}
    {{ HTML::style ("assets/css/MoneAdmin.css") }}
    {{ HTML::style ("assets/plugins/Font-Awesome/css/font-awesome.css") }}

</head>
    <!-- END  HEAD-->
    <!-- BEGIN BODY-->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">


         <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="{{URL::to('/')}}" class="navbar-brand">

                    <img src="assets/img/logo.png" alt="" /></a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!-- MESSAGES SECTION -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-success">2</span>    <i class="icon-envelope-alt"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                       <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Today</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                        <br />
                                        <span class="label label-primary">Important</span> 

                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>Raphel Jonson</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                         <br />
                                        <span class="label label-success"> Moderate </span> 
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>Chi Ley Suk</strong>
                                        <span class="pull-right text-muted">
                                            <em>26 Jan 2014</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                         <br />
                                        <span class="label label-danger"> Low </span> 
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!--END MESSAGES SECTION -->

                    <!--TASK SECTION -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-danger">5</span>   <i class="icon-tasks"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-tasks">
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> Profile </strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> Pending Tasks </strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> Work Completed </strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> Summary </strong>
                                            <span class="pull-right text-muted">80% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Tasks</strong>
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!--END TASK SECTION -->

                    <!--ALERTS SECTION -->
                    <li class="chat-panel dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-info">8</span>   <i class="icon-comments"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-alerts">

                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-comment" ></i> New Comment
                                    <span class="pull-right text-muted small"> 4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-twitter info"></i> 3 New Follower
                                    <span class="pull-right text-muted small"> 9 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-envelope"></i> Message Sent
                                    <span class="pull-right text-muted small" > 20 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-tasks"></i> New Task
                                    <span class="pull-right text-muted small"> 1 Hour ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-upload"></i> Server Rebooted
                                    <span class="pull-right text-muted small"> 2 Hour ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!-- END ALERTS SECTION -->

                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> User Profile </a>
                            </li>
                            <li><a href="#"><i class="icon-gear"></i> Settings </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="{{URL::to('/')}}"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
       <div id="left">
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    {{HTML::image("assets/img/user.gif",'User Picture', array('class'=>"media-object img-thumbnail user-img"))}}
                </a>
                <br />
                <div class="media-body">

                {{-- <h5 class="{{$nome->id}}">{{$nome->nome}}</h5> --}}
                    <h5 class="media-heading">{{Auth::user()->nome}}</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel">
                    <a href="#" >
                        <i class="icon-table"></i> Home     
                    
                    </a>                   
                </li>

                    @if(Auth::user()->tipo_id==1)

                            <li class="panel ">
                                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                                    <i class="icon-tasks"> </i>Registar     
                   
                                    <span class="pull-right">
                                      <i class="icon-angle-left"></i>
                                    </span>
                                   &nbsp; <span class="label label-default">10</span>&nbsp;
                                </a>
                                <ul class="collapse" id="component-nav">
                                    <li class=""><a href="{{URL::to('registar/registar')}}"><i class="icon-angle-right"></i> Funcionario </a></li>
                                     
                                     <li class=""><a href="#" data-toggle="modal" data-target="#myModal"><i class="icon-angle-right"></i> Tipo Funcionario</a></li>
                                     
                                </ul>

                            </li>

                             

                            <li class="panel ">
                                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                                    <i class="icon-pencil"></i> Relatorios
                   
                                    <span class="pull-right">
                                        <i class="icon-angle-left"></i>
                                    </span>
                                      &nbsp; <span class="label label-success">5</span>&nbsp;
                                </a>
                                <ul class="collapse" id="form-nav">
                                    <li class=""><a href="forms_fileupload.html"><i class="icon-angle-right"></i> Consultas Marcadas </a></li>
                                    <li class=""><a href="forms_editors.html"><i class="icon-angle-right"></i> Consultas Canceladas </a></li>
                                </ul>
                            </li>


                    @endif

                    @if(Auth::user()->tipo_id==2)

                            <li class="panel ">
                                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                                    <i class="icon-tasks"> </i>Agenda     
                   
                                    <span class="pull-right">
                                      <i class="icon-angle-left"></i>
                                    </span>
                                   &nbsp; <span class="label label-default">10</span>&nbsp;
                                </a>
                                <ul class="collapse" id="component-nav">
                                    <li class=""><a href="notifications.html"><i class="icon-angle-right"></i> Funcionario</a></li>
                                     <li class=""><a href="more_notifications.html"><i class="icon-angle-right"></i> Tipo Funcionario</a></li>
                                     
                                </ul>
                            </li>
                    @endif


                    @if(Auth::user()->tipo_id==3)

                    <li><a href="{{URL::to('consulta/marcarconsulta')}}"><i class="icon-columns"></i> Marcar Consulta </a></li>

                     <li><a href="{{URL::to('paciente/formpaciente')}}"><i class="icon-columns"></i> Registar Paciente</a></li>
                    @endif


                <li><a href="{{URL::to('/')}}"><i class="icon-signin"></i> Login Page </a></li>

            </ul>

        </div>
        <!--END MENU SECTION -->


        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        <h2>Clinica</h2>

                       <hr>Sistema de marcação de consultas</hr>

                        @yield('conteudo')

                        

                    </div>
                </div>

                <hr />




            </div>




        </div>
       <!--END PAGE CONTENT -->


    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  Desenvolvido por DMI &nbsp;2016 &nbsp;</p>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->

{{ HTML::script ("assets/plugins/jquery-2.0.3.min.js")}}
{{ HTML::script ("assets/plugins/bootstrap/js/bootstrap.min.js")}}
{{ HTML::script ("assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js")}}

                    {{Form::open(array('url'=>'registar/savetipo'))}}

                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Registar Tipo Funcionario</h4>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-group">
                                            <label class="control-label col-lg-4">tipo</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="email2" name="tipo" class="form-control">
                                            </div>
                                        </div>

                                         </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Gravar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{Form::close()}}
                      

    <!-- END GLOBAL SCRIPTS -->
</body>
    <!-- END BODY-->
    
</html>
