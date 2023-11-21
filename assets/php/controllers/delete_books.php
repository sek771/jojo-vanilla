<?php 

require_once('../middleware/connect.php');

$book_delete = $_POST['book-delete'];

$db_connect->query("DELETE FROM `book` WHERE book.title = '$book_delete' ");

header("Location: http://localhost/public/jojo-vanilla");