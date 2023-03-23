<?php  

$host = "localhost";
$db= "aulabd";
$users ="root";
$pass = "";

try {
	$conn = new PDO("mysql:host={$host};dbname={$db}", $users, $pass );
} catch (PDOException $e) {
	echo "Ocorreu um erro: <br> $e";
}

?>