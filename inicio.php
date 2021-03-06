<?php
	require 'processaLogin.php';
    if(isset($_SESSION['email']) && !empty($_SESSION['email'])){ 
?>



<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>TopCursos - A melhor plataforma de recomendação de cursos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/inicio.css">
		
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<nav class="right">
				<a href="logout.php" class="button fit" id="btnSair">Sair</a>
				</nav>
				<a href="index.html" class="logo">TopCursos</a>
			
				
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><label id="emailUser"><?php echo $_SESSION['email']; ?></label></li>
					<li><a href="index.html">Home</a></li>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="logout.php" class="button fit" id="btnSair">Sair</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>Bem Vindo(a)!</h1>
						<p>Aqui vai um texto falando sobre as categorias</p>
					</header>
					<div class="galeria">
						<div class="boxGaleria"><a href="https://go.hotmart.com/D49035622C"><img src="images/imagemCursoTI.jpg" class="fotoCategoria"></a></div>
						<div class="boxGaleriaTexto">TI</div>
						<div class="boxGaleria"><img src="images/imagemCursoGastronomia.jpg" class="fotoCategoria"></div>
						<div class="boxGaleriaTexto">Gastronomia</div>
						<div class="boxGaleria"><img src="images/ImagemCursoIngles.jpg" class="fotoCategoria"></div>
						<div class="boxGaleriaTexto">Inglês</div>
						<div class="boxGaleria"><img src="images/ImagemCursoIngles.jpg" class="fotoCategoria"></div>
						<div class="boxGaleriaTexto">Inglês</div>
						<div class="boxGaleria"><img src="images/ImagemCursoIngles.jpg" class="fotoCategoria"></div>
						<div class="boxGaleriaTexto">Inglês</div>
						<div class="boxGaleria"><img src="images/ImagemCursoIngles.jpg" class="fotoCategoria"></div>
						<div class="boxGaleriaTexto">Inglês</div>
					</div>
					
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Get In Touch</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(000) 000-0000</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">familia.topcursos@gmail.com</a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Images <a href="https://unsplash.com">Unsplash</a>.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php
	}else{
		header("Location: index.html");
	}
?>
