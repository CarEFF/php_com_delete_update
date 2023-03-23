<?php  


include "./conn.php";

$nameUsers = $_POST['nameUsers'];
$emailUsers = filter_input(INPUT_POST, 'emailUsers' ,FILTER_VALIDATE_EMAIL);
$passwordUsers = filter_input(INPUT_POST, 'passwordUsers');
$passwordUsersHash = password_hash($passwordUsers, PASSWORD_DEFAULT);

echo "$nameUsers - $emailUsers - $passwordUsers - $passwordUsersHash";

//preparar
$stmt = $conn->prepare("insert into users (name_Users, email_Users, pass_Users) values (:name_Users, :email_Users, :pass_Users)");

//trocar
$stmt->bindParam(':name_Users' , $nameUsers);
$stmt->bindParam(':email_Users' , $emailUsers);
$stmt->bindParam(':pass_Users' , $passwordUsersHash);

//executar
$stmt->execute();
