<?php
	require 'processaLogin.php';
    if(isset($_SESSION['email']) && !empty($_SESSION['email'])){ 
?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>TopCursos - A melhor plataforma de recomendação de cursos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/inicio.css">
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="inicio.php" class="logo">TopCursos</a>
				<nav class="right">
					<a href="logout.php" class="button alt">Sair</a>
				</nav>
			</header>

		<!-- Menu -->
		<nav id="menu">
				<ul class="links">
					<li><label id="emailUser"><?php echo $_SESSION['email']; ?></label></li>
					<li><a href="inicio.php">Home</a></li>
					<li><a href="generic.php">Agradecimento</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="logout.php" class="button fit" id="btnSair">Sair</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>Muito Obrigado !</h1>
						<p>Agradecemos ao professor  Me. Rodrigo Elias pela oportunidade de produzir um projeto desta  magnitude e evoluir nossas habilidades de trabalho em grupo e nos preparar para o mercado de trabalho</p>
						<p>Nossa Equipe:</p>
						<img class="image fit" src="images/equipe.jpg" alt="equipe">
					</header>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="actions">
						<li class="mousezinho"><span class="icon fa-phone"></span>(00) 0000-0000</li>
						<li class="mousezinho"><span class="icon fa-envelope"></span> familia.topcursos@gmail.com</li>
					</ul>
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
<?php }else{
		header("location:index.html");	
}?>