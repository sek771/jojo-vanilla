<?php 

require_once('../middleware/connect.php');

$read_delete = $_POST['read-delete'];

$db_connect->query("DELETE FROM `collections_read` WHERE user_email = '$read_delete'");

header("Location: http://localhost/public/jojo-vanilla");