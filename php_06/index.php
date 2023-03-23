<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document: index</title>
</head>
<body>
	<h1>Cadastrar usuário</h1>
	<p>Preencha os dados do usuário</p>
	<form action="insert.php" method="post">
		<div>
			<input type="text" name="nameUsers" placeholder="Nome usuario>
		</div>
		<div>
			<input type="email" name="emailUsers"placeholder="Email usuario>
		</div>
		<div>
			<input type="password" name="passwordUsers" placeholder="Senha usuario">
		</div>
		<div>
			<input type="submit" value="Cadastrar">
		</div>
		
			
	</form>
	
</body>
</html>