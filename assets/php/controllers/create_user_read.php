<?php

require_once('../middleware/connect.php');

$read_user = $_POST['read-user'];
$read_book = $_POST['read-book'];

$db_connect->query("INSERT INTO collections_read (id, user_email, book_title) VALUES (NULL, '$read_user', '$read_book')");

header("Location: http://localhost/public/jojo-vanilla");