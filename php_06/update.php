<?php 

include "./conn.php";

$id_Users = $_GET['id_Users'];

$stmt = $conn->prepare("select * from users where id_Users = :id_Users");

$stmt->bindParam(':id_Users', $id_Users);

$stmt->execute();

$users = $stmt->fetch(PDO::FETCH_ASSOC);

 ?>

<!DOCTYPE html>
<html lang=pt-br>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document:Update</title>
</head>
<body>
	<h1>Atualizar Dados</h1>
	<form action="updateAction.php" method="post">
		<input type="hydden" name="id_Users" value="<?= $users['id_Users']; ?>" readonly>
		<div>
			<input type="text" name="nameUsers" value="<?= $users['name_Users']; ?>">
		</div>
		<div>
			<input type="email" name="emailUsers" value="<?= $users['email_Users']; ?>">
		</div>
		<div>
			<input type="password" name="passwordUsers" value="">
		</div>
		<div>
			<input type="submit" value="Atualizar Cadastro">
		</div>
	</form>
</body>
</html>