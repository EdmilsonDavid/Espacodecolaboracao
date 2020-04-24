<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title> Espaco de Colaboracao </title>
	<!-- Bootstrap core CSS -->
	<link href="{{asset('paginainicial/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="{{asset('paginainicial/css/all.css')}}" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="{{asset('paginainicial/css/owl.carousel.min.css')}}" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="{{asset('paginainicial/css/jquery.fancybox.min.css')}}" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="{{asset('paginainicial/css/style.css')}}" rel="stylesheet">
</head>
<body>
<div class="wrapper-main">
	<!-- Top Bar -->
@include('start.cabecalho')
	


    <!-- Page Content -->

	<div class="services-bar" style="background-color: #f0fff0 !important;">
		@if(session('success'))

			<div class="alert alert-success">
				{{session('success')}}
			</div>

		@endif
		<div class="container">
			<h1 class="py-4">{{$pagina->tituloprojecto}} </h1>
			<!-- Services Section -->
			<div class="row">
				@forelse($projectos as $projecto)

				<div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="images/services-img-06.jpg" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header" style="
							color: black"> {{$projecto->nome}} </h4>
							<p class="card-text">{{$projecto->pequenadiscricao}}</p>
						</div>
						<button  style="margin-bottom: 0px"  type="button" id="{{$projecto->id}}" onclick="buscar({{json_encode($projecto)}})" data-toggle="modal"  data-target="#exampleModalCenter" class="btn btn-primary buscarParaMostrar">Mais Informações sobre o  projecto</button>
					</div>


				</div>
				@empty
					<h1>Nenhum projecto encontrado</h1>
				@endforelse
			</div>
		{{ $projectos->links() }}
			<!-- /.row -->
		</div>
	</div>















    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"  data-backdrop="static" aria-hidden="true" aria-labelledby="staticBackdropLabel">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #123F0C">
                    <h5 class="modal-title" id="exampleModalCenterTitle" style="color: white" >Mais Informações</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>--}}
                </div>
                <div class="modal-body">

                    <b>Nome do projecto</b>
                    <p id="nomemostrar"></p>
                    <hr>
                    <b>Descrição</b>
                    <p id="descricaomostrar"></p>
                    <hr>
                    <b>Requisitos</b>
                    <p id="requisitosmostrar"></p>
                    <hr>
                    <p>Caso queiras participar deveras preencher o formulário. <button class="btn btn-success abrirform" onclick="prencherformulario()">Click aqui</button></p>

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="limparmodal()">Fechar</button>
                </div>
            </div>
        </div>
    </div>













    <!-- /.container -->
    <!--footer starts from here-->

	@extends('start.rodape')
</div>
	  
<!-- Bootstrap core JavaScript -->
<script src="{{asset('paginainicial/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('paginainicial/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('paginainicial/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('paginainicial/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('paginainicial/js/filter.js')}}"></script>
<script src="{{asset('paginainicial/js/jquery.appear.js')}}"></script>
<script src="{{asset('paginainicial/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('paginainicial/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('paginainicial/js/script.js')}}"></script>



<script>
    function buscar(dados) {

        console.log(dados);

        document.getElementById("nomemostrar").innerHTML=dados.nome;
        document.getElementById("descricaomostrar").innerHTML=dados.descricao;
        document.getElementById("requisitosmostrar").innerHTML=dados.requisitos;

        /*  prencherformulario(nome);*/

    }


    function prencherformulario() {
        var nome= document.getElementById('nomemostrar').innerHTML;

        console.log(nome);
        $('#exampleModalCenterTitle').text('Formulário');
        $('.modal-body').html('');
        $('.modal-body').append('<form action="pedido-para-estagio" method="post" enctype="multipart/form-data">\n' +
            '                            @csrf\n' +
            '                            <div class="form-group">\n' +
            '                                <label for="exampleInputEmail1">Nome do projecto</label>\n' +
            '                                <input type="text" name="nome" class="form-control" value="" id="nomedeprojecto" aria-describedby="emailHelp" placeholder="Nome do projecto" required>\n' +
            '                            </div>\n' +
            '                            <div class="form-group">\n' +
            '                                <label for="exampleInputEmail1">Email</label>\n' +
            '                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Introduza o seu email">\n' +
            '                            </div>\n' +
            '                            <div class="form-group">\n' +
            '                                <label for="exampleInputPassword1">Pequena descricao sobre voce</label>\n' +
            '                                <textarea name="descricao" placeholder="Quem eh voce? Onde estuda ou estudou? O que Fazes? Onde vives?" class="form-control" rows="5" required></textarea>\n' +
            '                            </div>\n' +
            '                           <div class="form-group">\n' +
            '                               <label for="">Anexa curriculum vitae de preferencia em formato PDF</label>\n' +
            '                               <input type="file" name="uploadfile" class="form-control" required>\n' +
            '                           </div>\n' +
            '\n' +
            '\n' +
            '                            <button id="botao"  type="submit" onclick="habilitarcampu()" class="btn btn-primary">Enviar</button>\n' +
            '                        </form>');
        document.getElementById('nomedeprojecto').value=nome;
        $('#nomedeprojecto').attr('disabled', 'disabled');

    }


    function limparmodal() {
        window.location.reload();
    }
	function habilitarcampu() {
		$('#nomedeprojecto').removeAttr('disabled');
	}
</script>
</body>
</html>