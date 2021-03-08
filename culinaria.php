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
				<a href="inicio.php" class="logo">TopCursos</a>
			
				
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
						<h1>Bem Vindo(a)! </h1>
						<p>Aqui vai um texto falando sobre as categorias</p>
					</header>
					<div class="galeria">
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/F49081230G"><img src="images/culinaria/imagemCursoSensei.jpg" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/F49081230G">Sensei del Sushi</a></div>
						</div>
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/R49082026E"><img src="images/culinaria/imagemCursoPaes.jpg" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/R49082026E">Pães Caseiros</a></div>
						</div>
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/L49082147U"><img src="images/culinaria/imagemCursoSalgados.jpg" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/L49082147U">Salgados Artesanais</a></div>
						</div>
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/Y49082187L"><img src="images/culinaria/imagemCursoCulinaria.jpg" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/Y49082187L">Culinária em Casa</a></div>
						</div>
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/W49082255K"><img src="images/culinaria/imagemCursoConfeitaria.jpg" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/W49082255K">Confeitaria Vegana</a></div>
						</div>
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/B49083060O"><img src="images/culinaria/imagemCursoMarmitas.jpg" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/B49083060O">Marmitas Saudáveis</a></div>
						</div>
					</div>
					
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(000) 000-0000</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">familia.topcursos@gmail.com</a></li>
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
<?php
	}else{
		header("Location: index.html");
	}
?>
