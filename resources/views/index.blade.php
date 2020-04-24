<!DOCTYPE html>
<!-- ==============================
    Project:        Metronic "Acecv" Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
    Version:        1.0
    Author:         KeenThemes
    Primary use:    Corporate, Business Themes.
    Email:          support@keenthemes.com
    Follow:         http://www.twitter.com/keenthemes
    Like:           http://www.facebook.com/keenthemes
    Website:        http://www.keenthemes.com
    Premium:        Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
================================== -->
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>DSM-CIUEM</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="{{asset('inicial/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('inicial/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="{{asset('inicial/css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('inicial/vendor/swiper/css/swiper.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="{{asset('inicial/css/layout.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top" >
            <!-- Navbar -->
            <nav class="navbar" role="navigation" style="background: #3c763d !important;">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">

                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="#body">
                                <img src="https://upload.wikimedia.org/wikipedia/pt/2/2f/Logo_UEM.jpg" width="65" height="75" alt="">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item linkhover"><a class="nav-item-child nav-item-hover color-white" href="#body" style="font-family:'Times New Roman'; font-size:1.5em; letter-spacing: 0.02em; text-shadow: 1px 1px 1px rgba(0,0,0,.8); text-transform: none;">Home</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover color-white" href="#about" style="font-family:'Times New Roman'; font-size:1.5em; letter-spacing: 0.02em; text-shadow: 1px 1px 1px rgba(0,0,0,.8); text-transform: none;">Sobre-nos</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover color-white" href="#experience" style="font-family:'Times New Roman'; font-size:1.5em; letter-spacing: 0.02em; text-shadow: 1px 1px 1px rgba(0,0,0,.8); text-transform: none;">Projectos para estagios</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover color-white" href="#work" style="font-family:'Times New Roman'; font-size:1.5em; letter-spacing: 0.02em; text-shadow: 1px 1px 1px rgba(0,0,0,.8); text-transform: none;">Fazer pedido de estagio</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover color-white" href="#contact" style="font-family:'Times New Roman'; font-size:1.5em; letter-spacing: 0.02em; text-shadow: 1px 1px 1px rgba(0,0,0,.8); text-transform: none;">Contactos</a></li>
                            </ul>
                            <style>
                                 .linkhover:hover{
                                    text-decoration: underline;
                                    color:#00a157;

                                }
                            </style>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <div class="promo-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 sm-margin-b-60">
                        <div class="margin-b-30">
                            <h2 class="promo-block-title">{{$pagina->titulohome}}</h2>
                            <p class="promo-block-text">{{$pagina->subtitulohome}} </p>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="promo-block-img-wrap">
                            <img class="promo-block-img img-responsive" src="{{asset('inicial/programador.jpg')}}" align="Avatar">
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- About -->
        <div id="about">
            <div class="container content-lg">
                <div class="row">
                    <div class="col-sm-5 sm-margin-b-60">
                        <img class="full-width img-responsive" src="{{asset('inicial/homeprogramador.png')}}" alt="Image">
                    </div>
                    <div class="col-sm-7">
                        <div class="section-seperator margin-b-50">
                            <div class="margin-b-50">
                                <div class="margin-b-30">
                                    <h2>Sobre-Nós</h2>
                                    <p>{{$pagina->colaboracaosobre}}.  </p>
                                    <p> {{$pagina->dsmsobre}}</p>
                                </div>

                            </div>
                        </div>

                        <h2>Os colaboradores/Estagiarios podem ser</h2>
                        <!-- Progress Box -->

                        <div class="progress-box">
                            <h5>Programadores <span class="color-heading pull-right">Junior ou Senior </span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="100"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>Analistas <span class="color-heading pull-right"></span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="100"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>Designer <span class="color-heading pull-right"></span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="100"></div>
                            </div>
                        </div>
                        <!-- End Progress Box -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End About -->

        <!-- Experience -->
        <div id="experience">
            <div class="bg-color-sky-light" data-auto-height="true">
                <div class="container content-lg">
                    <div class="row row-space-2 margin-b-4">
                        <div class="col-md-12 col-sm-12 md-margin-b-4" >
                            <div class="service"  style="background: #fafffa" >
                                <div class="service-element">
                                    <i class="service-icon icon-prev"></i>
                                </div>
                                <div class="service-info">
                                 <h4> {{$pagina->tituloprojecto}}</h4>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>
                            </div>
                            <hr>
                        </div>
                        @forelse($projectos as $projecto)
                        <div class="col-md-3 col-sm-6 md-margin-b-4" >
                            <div class="service" data-height="height" style="height: 300px">
                                <div class="service-element">
                                    <i class="service-icon icon-prev"></i>
                                </div>
                                <div class="service-info">
                                    <h3>{{$projecto->nome}}</h3>
                                    <p class="margin-b-5">{{$projecto->pequenadiscricao}}</p>
                                </div>

                            </div>
                            <button  type="button" id="{{$projecto->id}}" onclick="buscar({{json_encode($projecto)}})" data-toggle="modal"  data-target="#exampleModalCenter" class="btn btn-primary buscarParaMostrar">Ver</button>
                            <hr>
                        </div>

                            @empty
                            <h1>Nenhum projecto encontrado</h1>
                        @endforelse



                    </div>
                    <!--// end row -->

                   {{--fim da linha--}}
                    {{ $projectos->links() }}

                    </div>

                </div>
            </div>
        </div>
        <!-- End Experience -->

        <!-- Work -->
        <div id="work">
            <div class="container content-lg">
                <div class="row margin-b-40" style="background: #fafafa">
                    <div class="col-sm-6">
                        <h2> {{$pagina->titulopedirestagio}}</h2>

                    </div>
                </div>
                <!--// end row -->

                <div class="row">
                    <!-- Latest Products -->
                    <div class="col-sm-6 sm-margin-b-50">

                        <h4> {{$pagina->subtitulopedirestagio}}</h4>
                        <p> {{$pagina->paragrafopedirestagio}}</p>
                         <p>Caso não  tenha visto, click no   <a class="link" href="#experience">Ver projectos</a></p>
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-6 sm-margin-b-50">
                        @if(session('success'))

                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>

                        @endif
                        <form action="pedido-para-estagio" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome do projecto</label>
                                <input type="text" name="nome" class="form-control" value="" id="nomedeprojecto" aria-describedby="emailHelp" placeholder="Nome do projecto" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Introduza o seu email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Pequena descricao sobre voce</label>
                                <textarea name="descricao" placeholder="Quem eh voce? Onde estuda ou estudou? O que Fazes? Onde vives?" class="form-control" rows="5" required></textarea>
                            </div>
                           <div class="form-group">
                               <label for="">Anexa curriculum vitae de preferencia em formato PDF</label>
                               <input type="file" name="uploadfile" class="form-control" required>
                           </div>


                            <button id="botao"  type="submit" onclick="habilitarcampu()" class="btn btn-primary">Enviar</button>
                        </form>



                    </div>
                    <!-- End Latest Products -->
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Work -->

        <!-- Clients -->
        <!-- End Clients -->

        <!-- Promo Banner -->

        <!-- End Promo Banner -->
            
        <!-- Contact -->
        <div id="contact">
            <div class="bg-color-sky-light">
                <div class="container content-lg">
                    <div class="row margin-b-40">
                        <div class="col-sm-6">
                           <h2>Contacta-nos</h2>
                            <p>{{$pagina->contactostexto}}</p>
                        </div>
                    </div>
                    <!--// end row -->

                    <div class="row">
                        <div class="col-md-6 col-xs-6 md-margin-b-30">
                            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=ciuem&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
                        </div>
                        <div class="col-md-3 col-xs-6">

                        </div>
                        <div class="col-md-3 col-xs-6">
                             <b>Campus Universitario</b><br>
                            <hr>
                            <b>  Principal, 3453, UEM</b><br><hr>
                            <b>Maputo - Mocambique</b>
                        </div>

                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Contact -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">

                    </div>
                    <div class="col-xs-6 text-right sm-text-left">
                        <p class="margin-b-0"><a class="fweight-700" href="http://keenthemes.com/preview/acecv/">Todos direitos reservados</a> Desenvolvido por : <a class="fweight-700" href="http://www.keenthemes.com/">DSM-CIUEM</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </footer>
        <!--========== END FOOTER ==========-->


        {{--Modals--}}
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Mais Informacoes</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <b>Nome do projecto</b>
                        <p id="nomemostrar"></p>
                        <hr>
                        <b>Descricao</b>
                        <p id="descricaomostrar"></p>
                        <hr>
                        <b>Requisitos</b>
                        <p id="requisitosmostrar"></p>
                        <hr>
                        <p>Caso queiras participar deveras preencher o Formulario. <button class="btn btn-success" onclick="prencherformulario()">Click aqui</button></p>

                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="{{asset('inicial/vendor/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('inicial/vendor/jquery-migrate.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('inicial/vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="{{asset('inicial/vendor/jquery.easing.js')}}" type="text/javascript"></script>
        <script src="{{asset('inicial/vendor/jquery.back-to-top.js')}}" type="text/javascript"></script>
        <script src="{{asset('inicial/vendor/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('inicial/vendor/jquery.wow.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('inicial/vendor/jquery.parallax.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('inicial/vendor/jquery.appear.js')}}" type="text/javascript"></script>
        <script src="{{asset('inicial/vendor/swiper/js/swiper.jquery.min.js')}}" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="{{asset('inicial/js/layout.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('inicial/js/components/progress-bar.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('inicial/js/components/swiper.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('inicial/js/components/wow.min.js')}}" type="text/javascript"></script>


        <script>
         function prencherformulario() {


             $('#exampleModalCenter').modal('hide');
             setTimeout(function(){window.location.href='#work';},1000);
             $('#botao').removeAttr('disabled');
             $('#nomedeprojecto').attr('disabled', 'disabled');


         }

         function buscar(dados) {
             console.log(dados);

             document.getElementById("nomemostrar").innerHTML=dados.nome;
             document.getElementById("descricaomostrar").innerHTML=dados.descricao;
             document.getElementById("requisitosmostrar").innerHTML=dados.requisitos;
             document.getElementById('nomedeprojecto').value=dados.nome;

         }




         $('#botao').attr('disabled', 'disabled');
         function habilitarcampu() {
             $('#nomedeprojecto').removeAttr('disabled');
         }
        </script>

    </body>
    <!-- END BODY -->
</html>