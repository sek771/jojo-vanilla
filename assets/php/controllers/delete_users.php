<?php 

require_once('../middleware/connect.php');

$user_delete = $_POST['user-delete'];

$db_connect->query("DELETE FROM `user` WHERE user.email = '$user_delete'");

header("Location: http://localhost/public/jojo-vanilla");