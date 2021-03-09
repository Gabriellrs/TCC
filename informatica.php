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
						<h1>Cursos de TI</h1>
						<p>Os cursos mais famosos do momento na área de Tecnologia da Informação!</p>
					</header>
					<div class="galeria">
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/D49035622C"><img src="images/ti/ImagemCursoPython2.png" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/D49035622C">Python</a></div>
						</div>
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/G49080219N"><img src="images/ti/ImagemCursoHtml5.png" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/G49080219N">HTML5</a></div>
						</div>
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/A49080655V"><img src="images/ti/ImagemCursoLogica.png" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/A49080655V">L. Programação</a></div>
						</div>
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/X49081026J"><img src="images/ti/ImagemCursoFull.png" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/X49081026J">Full Stack</a></div>
						</div>
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/S49081318S"><img src="images/ti/ImagemCursoNode.png" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/S49081318S">Node Js</a></div>
						</div>
						<div class="boxGaleriaMargem">
							<div class="boxGaleria"><a target="self_" href="https://go.hotmart.com/A49081508U"><img src="images/ti/ImagemCursoArduino.png" class="fotoCategoria"></a></div>
							<div class="boxGaleriaTexto"><a target="self_" href="https://go.hotmart.com/A49081508U">Arduino</a></div>
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
