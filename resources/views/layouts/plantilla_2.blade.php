<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="">

    <!-- estilos -->

    {{-- BOOTSTRAP --}}
    <link rel="stylesheet" type="text/css" href={!! asset('plugin/bootstrap-5.1.3-dist/css/bootstrap.css') !!}>
	<link rel="stylesheet" type="text/css" href={!! asset('plugin/fontawesome-free-6.0.0-web/css/all.css') !!}>
    <script type="text/javascript" src="{!! asset('plugin/bootstrap-5.1.3-dist/js/bootstrap.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('plugin/fontawesome-free-6.0.0-web/js/all.js') !!}"></script>
</head>

<body>
    <!-- header -->
	<header>
		<!-- nav -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contacto</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
								data-bs-toggle="dropdown" aria-expanded="false">
								Opciones
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<a class="nav-link text-dark" href={!! route('amor') !!}><i class="fas fa-heart"></i>*Amor*</a>
								</li>
								<li>
								</li>
								<li>
									<a class="nav-link text-dark" href={!! route('animal') !!}><i class="fas fa-paw"></i>*Animal*</a>
								</li>
								<li>
								</li>
								<li>
									<a class="nav-link text-dark" href={!! route('bosque') !!}><i class="fas fa-tree"></i>*Bosque*</a>
								</li>
								<li>
								</li>
								<li>
									<a class="nav-link text-dark" href={!! route('construccion') !!}><i class="fas fa-wrench"></i>*Construccion*</a>
								</li>
								<li>
								</li>
								<li>
									<a class="nav-link text-dark" href={!! route('amor_roto') !!}> <i class="fas fa-heart-broken"></i> *Corazon Roto*</a>
								</li>
								<li>
								</li>
								<li>
									<a class="nav-link text-dark" href={!! route('cuarto') !!}><i class="fas fa-bed"></i>*Cuarto*</a>
								</li>
								<li>
								</li>
								<li>
									<a class="nav-link text-dark" href={!! route('cubo') !!}><i class="fas fa-cube"></i>*Cubo*</a>
								</li>
								<li>
								</li>
								<li>
									<a class="nav-link text-dark" href=''><i class="fas fa-fire"></i>*Libido*</a>
								</li>
								<li>
								</li>
								<li>
									<a class="nav-link text-dark" href=''><i class="fas fa-mountain"></i>*Montaña*</a>
								</li>
								<li>
								</li>
								<li>
									<a class="nav-link text-dark" href=''><i class="fas fa-biking"></i>*Paseo*</a>
								</li>
								<li>
								</li>
								<li>
									<a class="nav-link text-dark" href=''><i class="fas fa-eye"></i> *Perspectiva*</a>
								</li>
								<li>
								</li>
								<li>
									<a class="nav-link text-dark" href=''><i class="fas fa-vihara"></i>*Tibetano*</a>
								</li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li>
									<a class="nav-link text-dark" href="" disabled>PROXIMAMENTE</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

    <h1>PAGINA INICIAL</h1>


    <!-- script -->
    {{-- BOOTSTRAP --}}


<body>

<html>
