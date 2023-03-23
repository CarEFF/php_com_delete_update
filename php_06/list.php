<?php  

include "./conn.php";


$stmt = $conn->prepare("select * from users");
$stmt->execute();
$list = $stmt->fetchALL(PDO::FETCH_ASSOC); 
//var_dump($list);

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document:List</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Código do Usuário</th>	
			<th>Nome do Usuário</th>
			<th>E-mail do Usuário</th>
			<th>Ações</th>
		</tr>
		<?php foreach ($list as $row): ?>
		<tr>
			<td><?= $row['id_Users']; ?></td>
			<td><?= $row['name_Users']; ?></td>
			<td><?= $row['email_Users']; ?></td>
			<td>
				<a href="update.php?id_Users=<?= $row['id_Users']; ?>">Editar</a>
				|
				<a href="delete.php?id_Users=<?= $row['id_Users']; ?>">Deletar</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>