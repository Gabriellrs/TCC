<!DOCTYPE html>
<html lang="pt-br">
<head>
		<title>TopCursos - A melhor plataforma de recomendação de cursos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/form.css" />
		<link rel="stylesheet" href="assets/css/responsiveBtn.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<nav class="left" id="displayNone2">
                    <a href="index.html" class="button alt">Voltar</a>
				</nav>
				<a href="index.html" class="logo">TopCursos</a>
				<nav class="right">
					<a href="login.php" class="button alt">Login</a>
				</nav>
            </header>

        <!-- Form --> 
        <div class="form">
            <form method="post" action="processa.php">
                <label>Nome: </label><input type="text" name="nome" maxlength="40" required autofocus>
                <label>Email: </label><input type="email" name="email" maxlength="50" required>
                <label>Senha: </label><input type="password" name="senha" maxlength="20" required>
                <label>Confirmar Senha: </label><input type="password" name="senha2" maxlength="20" required>,<br>
                <input type="submit" value="Finalizar Cadastro" class="btnFC" name="cadastrar">
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