<?php 

require_once('../middleware/connect.php');

$read_user = $_POST['read-user'];
$read_edit = $_POST['read-edit'];

$db_connect->query("INSERT INTO collections_read (id, user_email, book_title) VALUES (NULL, '$read_user', '$read_edit')");

header("Location: http://localhost/public/jojo-vanilla");