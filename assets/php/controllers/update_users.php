<?php 

require_once('../middleware/connect.php');

$user_edit = $_POST['user-edit'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$alias = $_POST['alias'];

$db_connect->query("UPDATE user SET email='$email', password='$password', alias='$alias' WHERE user.email = '$user_edit'");

header("Location: http://localhost/public/jojo-vanilla");