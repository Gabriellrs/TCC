<!DOCTYPE html>
<html lang="pt-br">
<head>
		<title>TopCursos - A melhor plataforma de recomendação de cursos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/form.css" />
		<link rel="stylesheet" href="assets/css/responsiveBtn.css">
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<nav class="left" id="displayNone2">
                    <a href="index.html" class="button alt">Voltar</a>
				</nav>
				<a href="index.html" class="logo">TopCursos</a>
            </header>

        <!-- Form --> 
        <div class="form">
            <form method="post" action="processaLogin.php">
                <label>Email: </label><input type="email" name="email" maxlength="50" required autofocus>
                <label>Senha: </label><input type="password" name="senha" maxlength="20" required><br>
                <button type="submit" name="logar" class="btnFC">Entrar</button>
            </form>
        </div>           

            <!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(000) 000-0000</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">familia.topcursos@gmail.com</a></li>
					</ul>
				</div>
			</footer>
	</body>
</html>