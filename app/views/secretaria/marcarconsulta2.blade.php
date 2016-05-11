@extends('templete')

@section('script')
    <style type="text/css" media="screen">
        .nav-tabs li{
            list-style-type: none;
        }
    </style>
@stop

@section('conteudo')

    @foreach($medicos as $medico)
        {{ $medico->nome }}
    @endforeach

{{ Form::open(array('url'=>'consulta/saveconsulta')) }}

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
                <h2>Extras </h2>
                <section>
                      <!-- <form role="form"> -->
                                        
                                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                @foreach($medicos as $m)
                                    <li><a href="#{{$m->nome}}" data-toggle="tab">{{ $m->nome }}</a>
                                </li>
                                @endforeach
                            </ul>

                            <div class="tab-content">

                                @foreach($medicos as $m)
                                    <div class="tab-pane fade in active" id="{{$m->nome}}">
                                        <h4>{{ $m->nome }}</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                @endforeach

                                
                                
                            </div>
                        </div>
                                       
                                    <!-- </form> -->
                </section>

                <h2>Agreement</h2>
                <section>
                    <p style="text-align:justify;color:gray;">
                        <b> Agreement & Declaration</b> <br /><br />
                        Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo condimentum dapibus. Fusce eros justo, 
                        pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat.
                        <br />  <br /> 
                        Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris 
                        venenatis. Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate. Aliquam sed sem tortor. 
                        Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae. 
                        Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.
                        <br />
                       
                        
                    </p>
                </section>
            </div>
                             
                        </div>
                    </div>
                 </div>
                </div>

            </div>






{{ Form::close() }}


@stop