<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="social-media">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-details">
                    <ul>
                        <li><i class="fas fa-user"></i><a href="login" style="color: white">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">
    <div class="container">
        <a class="navbar-brand" href="">
            <img src="{{asset('files/'.$pagina->logotipo)}}" alt="Espaco de colaboraca" />
            <b>o</b>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('homeInicial')}}">Home</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{route('projectosLista')}}">Projectos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>