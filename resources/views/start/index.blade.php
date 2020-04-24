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

    <!-- Navigation -->
       @include('start.cabecalho')
	
    <header class="slider-main">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <!-- Slide One - Set the background image for this slide in the line below -->
               <div class="carousel-item active" style="background-image: url({{asset('files/'.$pagina->slider1)}})">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>{{$pagina->titulohomeslider1}}</h3>
                     <p>{{$pagina->sobrehomeslider1}}</p>
                      <b>{{$pagina->participe}}</b>
                  </div>
               </div>
               <!-- Slide Two - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url({{asset('files/'.$pagina->slider2)}})">
                  <div class="carousel-caption d-none d-md-block">
					  <h3>{{$pagina->titulohomeslider2}}</h3>
					  <p>{{$pagina->sobrehomeslider2}}</p>
					  <b>{{$pagina->participe}}</b>
                  </div>
               </div>
               <!-- Slide Three - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url({{asset('files/'.$pagina->slider3)}})">
                  <div class="carousel-caption d-none d-md-block">
					  <h3>{{$pagina->titulohomeslider3}}</h3>
					  <p>{{$pagina->sobrehomeslider3}}</p>
					  <b>{{$pagina->participe}}</b>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
            </a>
        </div>
    </header>
	
    <!-- Page Content -->
    <div class="container">        
        <!-- About Section -->
        <div class="about-main">
            <div class="row">
               <div class="col-lg-6">
                  <h2>{{$pagina->titulohome}}</h2>
                  {{$pagina->descricacaoespacodecolaboracao}}
				   <br>
				   <br>

				  <h5>Objectivos do Espaço de colaboração </h5>
                  <ul>
                     <li>{{$pagina->objectivo1}}</li>
                     <li>{{$pagina->objectivo2}}</li>
                     <li>{{$pagina->objectivo3}}</li>
                  </ul>
               </div>
               <div class="col-lg-6">
                  <img class="img-fluid rounded" src="{{asset('files/'.$pagina->slidersobre)}}" alt="" />
               </div>
            </div>
            <!-- /.row -->
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
</body>
</html>