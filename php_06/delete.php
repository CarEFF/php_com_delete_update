<?php 

include "./conn.php";

$id_Users = $_GET['id_Users'];


$stmt = $conn->prepare("delete from users where id_Users = :id_Users");

$stmt->bindParam(':id_Users', $id_Users);

$stmt->execute();

//echo "Seja bem vindo ao seu delete";

header("location: list.php");
