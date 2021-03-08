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
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/R49083802T"><img src="images/design/ImagemCursoDesignCanvas.jpg" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/R49083802T">Design Canvas</a></div>
						</div>
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/H49084030C"><img src="images/design/ImagemCursoAcelera.png" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/H49084030C">Acelera Design</a></div>
						</div>
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/F49084249D"><img src="images/design/ImagemCursoBig.png" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/F49084249D">Big Pack Designer</a></div>
						</div>
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/Y49084339W"><img src="images/design/ImagemCursoDesign.jpg" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/Y49084339W">Designer Na Prática</a></div>
						</div>
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/F49084450C"><img src="images/design/ImagemCursoKit.jpeg" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/F49084450C">Kit do Designer</a></div>
						</div>
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/I49084577V"><img src="images/design/ImagemCursoLogo.jpg" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/I49084577V">Logo e Grid</a></div>
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
