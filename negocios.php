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
						<h1>Cursos de Negócios</h1>
						<p>Os cursos mais famosos do momento no ramo de negócios!</p>
					</header>
					<div class="galeria">
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/X49083867W"><img src="images/negocios/imagemCursoEmpresario.jpg" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/X49083867W">Empresários da Moda</a></div>
						</div>
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/U49083983K"><img src="images/negocios/imagemCursoBoss.jpg" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/U49083983K">Boss Trader</a></div>
						</div>
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/E49084043I"><img src="images/negocios/imagemCursoFutCash.jpg" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/E49084043I">FutCash Vitalício</a></div>
						</div>
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/Q49084096P"><img src="images/negocios/imagemCursoMestre.jpeg" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/Q49084096P">Mestre da OB</a></div>
						</div>
						<div class="boxGaleriaMargem">
							<div  class="boxGaleria"><a target="self_" href="https://go.hotmart.com/B49084193I"><img src="images/negocios/imagemCursoRobo.jpg" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a  target="self_" href="https://go.hotmart.com/B49084193I">Robô de Forex</a></div>
						</div>
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a href="https://go.hotmart.com/C49084231R"><img src="images/negocios/imagemCursoRoboin.jpg" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a href="https://go.hotmart.com/C49084231R">Robô Investidor</a></div>
						</div>
					</div>
					
				</div>
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
<?php
	}else{
		header("Location: index.html");
	}
?>
