<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>DSM| CIUEM</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/skins/_all-skins.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
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
    <!------------------------------------------------------------------------------------------------------------------------>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dados dos Utilizadores
                <small>Gestao de Utilizadores</small>
            </h1>

            <div style="float: right; margin-top: 10px; margin-bottom: 10px; margin-right: 250px; width: 200px">

                <button type="button" class="btn btn-block btn-primary"  data-toggle="modal" data-target="#exampleModal"  >Cadastrar Usuario</button>
            </div>
            <hr style="color: black">
            <br>
            Altera Sua Password :_<input type="password" name="password" placeholder="Password">__<input type="password" name="confirmar" placeholder="Confirmar password">  <button onclick="password()">Alterar password</button>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                @if(session('success'))

                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>

                @endif
                <div class="col-xs-12">

                    <!-- /.box -->
                    <!============================================================================================================---->
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Tabela de dados dos estagiarios</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Remover</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}
                                        </td>

                                        <td><button class="buscarParaRemover btn btn-danger" style="background-color: red" id="{{$user->id}}" data-toggle="modal" data-target="#modelpararemover"data-id="{{$user}}" data-target="exampleModalCenter">Remover</button></td>
                                    </tr>
                                @empty
                                    <h1>Nenhum Estagiario Registado</h1>
                                @endforelse



                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>

                                    <th>Remover</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>
</div>
<!-- ./wrapper -->



{{--Modal para registar estagiarios--}}

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Novo Estagiario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nome</label>
                            <input type="text" class="form-control" name="nomesave" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="text" class="form-control" name="emailsave" id="recipient-name">
                        </div>


                    </form>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" onclick="usuariosave()">Gravar</button>
            </div>
        </div>
    </div>
</div>






<!--==================================================================================================-->

<!--================================================ Modal para remover ============================================================= -->

<div class="modal fade" id="modelpararemover" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Remover Funcionario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <h4> Desejas realmente remover  Estagiario</h4>
                    <h3 id="nomedelete"></h3>
                    <input type="text" id="fFId" name="idremover" hidden>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Nao</button>
                    <button type="submit" class="btn btn-primary" onclick="usuariosremove()">Sim</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--=====================================================================================================-->



<!-- jQuery 3 -->
<script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<!-- page script -->
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>


<script>
    function  usuariosave() {
        $.ajax({
            type:'post',
            url: 'usuariosave',
            data:{
                '_token':$('input[name=_token]').val(),
                'nome':$('input[name=nomesave]').val(),
                'email':$('input[name=emailsave]').val()
            },
            success:function(data){
                alert("Dados registados com sucesso!");
                window.location.reload();

            },
            error:function () {
                alert("Os dados nao foram actualizados, ocorreum um erro durante o processamento de actualizacao dos mesmos");

            }
        });
    }




    function  usuariosremove() {
        $.ajax({
            type:'post',
            url: 'usuarioremove',
            data:{
                '_token':$('input[name=_token]').val(),
                'id':$('input[name=idremover]').val(),

            },
            success:function(data){
                alert("Dados removido com sucesso!");
                window.location.reload();

            },
            error:function () {
                alert("Os dados nao foram removidos, ocorreum um erro durante o processamento de remocao dos mesmos");

            }
        });
    }





    //========================Buscar para remover===========================
    $('.buscarParaRemover').on('click',function(){
        var id = $(this).attr('id');
        var  objJson = $(this).data('id');

        console.log('o id é: '+id);
        //console.log(val(objJson[id].email));
        console.log('o index é: '+objJson);
        //$('#modalBuscar').html(id[$('.buscar').val()].nome);


        document.getElementById("nomedelete").innerHTML=objJson.name+"?";
        document.getElementById('fFId').value=objJson['id'];

    });


    function password() {
        if ($('input[name=password]').val()==$('input[name=confirmar]').val()){
            $.ajax({
                type:'post',
                url: 'passwordupdate',
                data:{
                    '_token':$('input[name=_token]').val(),
                    'password':$('input[name=password]').val(),

                },
                success:function(data){
                    alert("Dados actualizados com sucesso!");
                    window.location.reload();

                },
                error:function () {
                    alert("Os dados nao foram actualizados, ocorreum um erro durante o processamento de actualizacao dos mesmos");

                }
            });
        }else {
            alert('As passwords nao sao os mesmos, escreva do novo');
        }

    }

</script>
</body>
</html>
