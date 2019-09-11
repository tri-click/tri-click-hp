<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Complete Bootstrap 4 Website Layout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="css/style.css" rel="stylesheet"> 

<!--	<link rel="stylesheet" href="css/style.css"> -->
	
</head>
<body>


<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class= "container-fluid">
	<a class = "navbar-brand" href="/"><img src ="img/tri-click trans.png" width="200px" height="100px">

	</a> 
	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class ="navbar-toggler-icon"></span>
	</button>
		
	<div class= "collapse navbar-collapse" id="navbarResponsive">
		<ul class= "navbar-nav ml-auto">
			<li class="nav-item">
				<a class ="nav-link" href="#">home</a>
			</li>
				<li class="nav-item">
				<a class ="nav-link" href="#">portafolio</a>
			</li>
				<li class="nav-item">
				<a class ="nav-link" href="#">contactos</a>
			</li>

		</ul>
		
	</div>	
</div>
</nav>


<!--- Image Slider -->

<div id="slides" class ="carousel slide" data-ride="carousel">
<ul class ="carousel-indicators">
	<li data-target="#slides" data-slide-to ="0" class= "active"></li>
	
	<li data-target="#slides" data-slide-to ="1"></li>

	<li data-target="#slides" data-slide-to ="2"></li>

</ul>		
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="img/background.png">
		<div class= "carousel-caption">
		<h1 class="display-2">Bienvenido</h1>	
		</div>
	</div>
	<div class="carousel-item">
		<img src="img/background2.png">	
	</div>
	<div class="carousel-item">
		<img src="img/background3.png">	
	</div>

</div>
</div> 

<!--- Jumbotron -->
<div class = "container-fluid">
<div class="row jumbotron">
	<div class = "col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
		<p class= "lead">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		
		 
		</p>
</div>

</div>
</div>

<!--- Welcome Section -->
<div class= "container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class= "display-4"> Creando con facilidad </h1>
	</div>
	<hr>
	<div class= "col-12">
		<p class="lead"> bienvenido a la pagina :D </p>
	</div>

</div>
</div>
<!--- Three Column Section -->
<div class= "container-fluid padding">
<div class= "row text-center padding">
	<div class= "col-xs-12 col-sm-6 col-md-4">
		<i class ="fas fa-code"></i>
		<h3>HTML5</h3>
		<p>Utilizando la ultima version de HTML,HTML5</p>

	</div>
		<div class= "col-xs-12 col-sm-6 col-md-4">
		<i class ="fas fa-bold"></i>
		<h3>BOOTSTRAP</h3>
		<p>Utilizando la ultima version de Bootstrap,BOOTSTRAP 4</p>
		
	</div>
		<div class= "col-sm-12 col-md-4">
		<i class ="fab fa-css3"></i>
		<h3>CSS3</h3>
		<p>Utilizando la ultima version de Css,CSS3</p>
		
	</div>			
</div>
<hr class ="my-4">
</div>	

<!--- Two Column Section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
			<h2> titulo bonito </h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p> 
				<p>Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
				<p> Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<br>
				<a href="#" class="btn btn-primary">Ver mas</a>
		</div>
		<div class="col-lg-6">
		<img src="img/desk.png" class="img-fluid">
		</div>	
	</div>	

</div>
<hr class="my-4">
<!--- Fixed background -->

<!--- Emoji Section -->

	<div class="container-fluid padding">
		<div class= "row text-center">

				<div class= "col-sm-6 col-md-3">
				<img class="gif" src="img/gif/panda.gif">
				</div>	
				<div class= "col-sm-6 col-md-3">	
				<img class="gif" src="img/gif/poo.gif">
				</div>
				<div class= "col-sm-6 col-md-3">
				<img class="gif" src="img/gif/unicorn.gif">
				</div>
				<div class= "col-sm-6 col-md-3">
				<img class="gif" src="img/gif/chicken.gif">
				</div>
		</div>
	</div>		
<!--- Meet the team -->
<div class= "container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4"> Conoce al Equipo </h1> 
		</div>
		<hr>
	</div>
</div>			

<!--- Cards -->
<div class= "container-fluid padding">
<div class= "row padding">
	<!-- carta 1 -->
	<div class= "col-md-4">
			<div class= "card">
			<img class= "card-img-top" src="img/team1.png">
			<div class= "card-body">
				<h4 class="card-title">Juan Guapo</h4>
				<p> Juan Guapo es un hombre Guapo e inteligente de 26 años. </p>
				<a href="#" class= "btn btn-outline-secondary">Ver Perfil</a>	
			</div>	
			</div>	
	</div>

	<!-- carta 2 -->
	<div class= "col-md-4">
			<div class= "card">
			<img class= "card-img-top" src="img/team2.png">
			<div class= "card-body">
				<h4 class="card-title">Maria Juana</h4>
				<p> Maria Juana es la mejor...... Profesional de nuestro equipo de diseñadores </p>
				<a href="#" class= "btn btn-outline-secondary">Ver Perfil</a>	
			</div>	
			</div>	
	</div>

	<!-- carta 3 -->
	<div class= "col-md-4">
			<div class= "card">
			<img class= "card-img-top" src="img/team3.png">
			<div class= "card-body">
				<h4 class="card-title">Elbert Galarga</h4>
				<p> Elbert es nuestro experto en ascii art ░░░░█─────────────█──▀──
				░░░░▓█───────▄▄▀▀█──────
				░░░░▒░█────▄█▒░░▄░█─────
				░░░░░░░▀▄─▄▀▒▀▀▀▄▄▀─────
				░░░░░░░░░█▒░░░░▄▀───────
				▒▒▒░░░░▄▀▒░░░░▄▀────────
				▓▓▓▓▒░█▒░░░░░█▄─────────
				█████▀▒░░░░░█░▀▄────────
				█████▒▒░░░▒█░░░▀▄───────
				███▓▓▒▒▒▀▀▀█▄░░░░█──────
				▓██▓▒▒▒▒▒▒▒▒▒█░░░░█─────
				▓▓█▓▒▒▒▒▒▒▓▒▒█░░░░░█────
				░▒▒▀▀▄▄▄▄█▄▄▀░░░░░░░█───. 
</p>
				<a href="#" class= "btn btn-outline-secondary">Ver Perfil</a>	
			</div>	
			</div>	
	</div>

</div>		
</div>
<!--- Two Column Section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
			<h2> Nuestra forma de trabajo </h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p> 
				<p>Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
				<p> Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<br>
			
		</div>
		<div class="col-lg-6">
		<img src="img/bootstrap2.png" class="img-fluid">
		</div>	
	</div>	
	<hr class="my-4">
</div>


<!--- Connect -->
<div class= "container-fluid padding">
<div class="row text-center padding">
	<div class= "col-12">
		<h2>Nuestras Redes Sociales</h2>
	</div>
	<div class= "col-12 social padding">
	 	<a href="#"><i class="fab fa-facebook"></i></a>
	 	<a href="#"><i class="fab fa-twitter"></i></a>
	 	<a href="#"><i class="fab fa-google-plus-g"></i></a>
	 	<a href="#"><i class="fab fa-instagram"></i></a>
	 	<a href="#"><i class="fab fa-youtube"></i></a>	
	</div>
</div>		
</div>
<!--- Footer -->
<footer>
<div class="container-fluid padding">
<div class="row text-center">
	<div class="col-md-4">

		<img src="img/tri-click trans.png" width="200" height="100">
		<hr class="light">
	
		<p>041-2933233</p>
		<p>micorreo@micorreo.com</p>
		<p>calle mi casa 6969</p>
		<p>Concepcion, 00000</p>
		<p></p>
	</div>

	<div class="col-md-4" id="col2">

		<hr class="light">
		<h5>Nuestro horario</h5>
		<hr class="light">
		<p>Lunes a viernes 9:00 a 18:00</p>
		<p>Sabado de 9:00 a 14:00</p>
		<p>Domingo es del señor</p>
	</div>	
	
	<div class="col-md-4" id="col3">

		<hr class="light">
		<h5>Como llegar</h5>
		<hr class="light">
		<p>Mapita de gugul</p>
	</div>
	<div class="col-12">
		<hr class="light-100">
		<h5>&copy; TRI-CLICK.cl</h5>
	</div>
</div>		
</div>	
</footer>



</body>
</html>









<!-- View in Browser: Drew's #1 Trending YouTube Tutorial -->

<!-- End View in Browser: Drew's #1 Trending YouTube Tutorial -->


