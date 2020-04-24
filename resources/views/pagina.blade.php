<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DSM| CIUEM</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/morris.js/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo" style="background: #00a157">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>D</b>SM</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>DSM</b>CIUEM</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" style="background: #00a157">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- Notifications: style can be found in dropdown.less -->

                    <!-- Tasks: style can be found in dropdown.less -->

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            <span class="hidden-xs"> {{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">


                                <p>
                                    {{ Auth::user()->name }}
                                    <small>{{ Auth::user()->email }}</small>
                                </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <div >
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>

                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
              <p></p>
                    <br>
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>


                <li>
                    <a href="{{route('home')}}">
                        <i class="fa fa-home"></i> <span>HOME</span>
                        <span class="pull-right-container">

            </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('projectos')}}">
                        <i class="fa fa-product-hunt"></i> <span>Projectos</span>
                        <span class="pull-right-container">

            </span>
                    </a>
                </li>


                <li>
                    <a href="{{route('estagiarios')}}">
                        <i class="fa fa-universal-access"></i> <span>Estagiarios</span>
                        <span class="pull-right-container">

            </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('projectoestagio')}}">
                        <i class="fa fa-american-sign-language-interpreting"></i> <span>Projecto-Estagiario</span>
                        <span class="pull-right-container">

            </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('user.index')}}">
                        <i class="fa fa-users"></i> <span>Utilizadores</span>
                        <span class="pull-right-container">

            </span>
                    </a>
                </li>



                <li>
                    <a href="{{route('emails')}}">
                        <i class="fa fa-envelope"></i> <span>Mailbox</span>
                        <span class="pull-right-container">

              <small class="label pull-right bg-yellow">{{$novasmensagens}}</small>
                         <small class="label pull-right bg-fuchsia-active">Novas mensagens </small>

            </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('pagina')}}">
                        <i class="fa fa-slack"></i> <span>Configuracoes da pagina</span>
                        <span class="pull-right-container">

            </span>
                    </a>
                </li>


            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Configurações da Pagina
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            @if(session('success'))

                <div class="alert alert-success">
                    {{session('success')}}
                </div>

             @endif
            <!-- Small boxes (Stat box) -->
            <form action="{{route('pagina.store')}}" method="post" enctype="multipart/form-data">>
                @csrf
            <div class="row">
                <div class="col-lg-12 col-xs-12" style="background: #3b20ff">
                    <h4 style="color: white">Header/Cabeçalho</h4>
                </div>
                <div class="col-lg-12 col-xs-12" style="background: #ffffff">
                    É imperioso que a dimensão da imagem do logoTipo seja 200x50   cumprimento:200 e a largura 50, principalmente a altura.
                    <input type="file" name="logotipo">
                </div>
                <div class="col-lg-12 col-xs-12" style="background:  #3b20ff">
                    <h4  style="color: white">Home</h4>
                </div>

                <div class="col-lg-12 col-xs-12" style="background: #ffffff">
                    <div class="row">
                       <b> É imperioso que as dimensoes das imagens do slidershow sejam 1920x1080   cumprimento:1920 e a largura 1080. e tambem sejam da extensao JPG</b>
                    </div>

                    <div class="col-lg-4 col-xs-4" style="background: #ffffff">
                        Primeira imagem
                        <input type="file" name="slider1">
                    </div>
                    <div class="col-lg-4 col-xs-4" style="background: #ffffff">
                        Segunda imagem
                        <input type="file" name="slider2">
                    </div>
                    <div class="col-lg-4 col-xs-4" style="background: #ffffff">
                        Terceira imagem
                        <input type="file" name="slider3">
                    </div>

                </div>

                <div class="col-lg-4 col-xs-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Primeiro Slider</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">TITULO</label>
                                    <textarea rows="2" class="form-control"  id="titulohomeslider1" name="titulohomeslider1" required></textarea>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" >SUBTITULO</label>
                                    <textarea rows="2" class="form-control" id="sobrehomeslider1" name="sobrehomeslider1" required></textarea>
                                </div>

                            </div>


                    </div>

                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Segundo Slider</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">TITULO</label>
                                <textarea rows="2" class="form-control"  id="titulohomeslider2" name="titulohomeslider2" required></textarea>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" >SUBTITULO</label>
                                <textarea rows="2" class="form-control" id="sobrehomeslider2" name="sobrehomeslider2" required></textarea>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Terceiro Slider</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">TITULO</label>
                                <textarea rows="2" class="form-control"  id="titulohomeslider3" name="titulohomeslider3" required></textarea>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" >SUBTITULO</label>
                                <textarea rows="2" class="form-control" id="sobrehomeslider3" name="sobrehomeslider13" required></textarea>
                            </div>

                        </div>

                    </div>   <!-- small box -->
                    Participar<input type="text" name="participe" id="participe" class="form-control" id="">
                </div>

                <div class="row">
                    <div class="col-lg-12">
                    <div class="col-lg-6">
                        <label for="exampleInputPassword1" >Titulo sobre espaco de colaboracao</label>
                        <textarea rows="2" class="form-control" id="titulohome" name="titulohome" required></textarea>
                        <br>
                        <label for="exampleInputPassword1" >A dimessao da Imagem deve ser de 700x420</label>
                        <input type="file" id="slidersobre" name="slidersobre">
                    </div>

                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" >Descricao sobre espaco de colaboracao</label>
                            <textarea rows="8" class="form-control" id="descricacaoespacodecolaboracao" name="descricacaoespacodecolaboracao" required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        Objectivo 1
                        <input type="text "  class="form-control" name="objectivo1" id="objectivo1">
                        Objectivo 2
                        <input type="text"  class="form-control"  name="objectivo2" id="objectivo2">
                        Objectivo 3
                        <input type="text"  class="form-control" name="objectivo3" id="objectivo3" >
                    </div>
                </div>

                <div class="col-lg-12 col-xs-12" style="background: #3b20ff">
                    <h4 style="color: white">Footer/Rodape</h4>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-4">
                            <label for="exampleInputPassword1" >Sobre DSM</label>
                            <textarea rows="8" class="form-control" id="sobredsm" name="sobredsm" required></textarea>
                        </div>

                        <div class="col-lg-4">
                            <label for="exampleInputPassword1" >Sobre cursos de CIUEM</label>
                            <textarea rows="8" class="form-control" id="ciuem" name="ciuem" required></textarea>
                        </div>
                        <div class="col-lg-4">
                            <label for="exampleInputPassword1" >Sobre Parceiros</label>
                            <textarea rows="8" class="form-control" id="parceiros" name="parceiros" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-xs-12" style="background: #3b20ff">
                    <h4 style="color: white">Projectos</h4>
                </div>
                
                <div class="col-lg-12">
                    Titulo de projectos
                    <input type="text" name="tituloprojecto" id="tituloprojecto" class="form-control">
                </div>

                <!-- ./col -->

                <!-- ./col -->
            </div>
                <br>
                <br>
                <hr>
            <!-- /.row -->
            <!-- Main row -->
<button type="submit" class="btn btn-danger">Alterar o conteudo da pagina</button>
            <!-- /.row (main row) -->
            </form>
        </section>

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Dados da Pagina</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-condensed">
                    <tr>

                        <th>Titulo Home</th>
                        <th>Subtitulo Home</th>
                        <th>Modificado por</th>

                        <th style="width: 40px">Preencher campus vazios</th>
                    </tr>

                    <tr>

                        <td>{{$pagina->titulohomeslider1}}</td>
                        <td>{{$pagina->sobrehomeslider1}}</td>
                        <td>{{$pagina->modificadopor}}</td>

                        <td><button style="width: 200px" class="btn btn-success" onclick="preenchercampus({{json_encode($pagina)}})">Preencher os campus</button></td>
                    </tr>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.
        </div>
        <strong>Copyright &copy; 2020-2020 <a href="https://ciuem.co.mz">CIUEM</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('admin/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('admin/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('admin/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<script>
    function preenchercampus(dados) {
        console.log(dados);

        document.getElementById('titulohomeslider1').value=dados.titulohomeslider1;
        document.getElementById('titulohomeslider2').value=dados.titulohomeslider2;
        document.getElementById('titulohomeslider3').value=dados.titulohomeslider3;
        document.getElementById('sobrehomeslider1').value=dados.sobrehomeslider1;
        document.getElementById('sobrehomeslider2').value=dados.sobrehomeslider2;
        document.getElementById('sobrehomeslider3').value=dados.sobrehomeslider3;
        document.getElementById('titulohome').value=dados.titulohome;
        document.getElementById('descricacaoespacodecolaboracao').value=dados.descricacaoespacodecolaboracao;
        document.getElementById('objectivo1').value=dados.objectivo1;
        document.getElementById('objectivo2').value=dados.objectivo2;
        document.getElementById('objectivo3').value=dados.objectivo3;
        document.getElementById('sobredsm').value=dados.sobredsm;
        document.getElementById('parceiros').value=dados.parceiros;
        document.getElementById('tituloprojecto').value=dados.tituloprojecto;
        document.getElementById('ciuem').value=dados.ciuem;
        document.getElementById('participe').value=dados.participe;
       /* document.getElementById('objectivo3').value=dados.objectivo3;*/

    }
</script>
</body>
</html>
