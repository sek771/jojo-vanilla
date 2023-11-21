<?php 

require_once('../middleware/connect.php');

$book_edit = $_POST['book-edit'];
$title = $_POST['title'];
$sub_title = $_POST['sub_title'];
$authors = $_POST['authors'];
$country = $_POST['country'];
$editor = $_POST['editor'];
$image = $_POST['image'];
$tome = $_POST['tome'];

$db_connect->query("UPDATE book SET user_email = '$title', book_title='$sub_title', authors='$authors', country='$country', editor='$editor', image='$image', tome='$tome' WHERE book.title = '$book_edit'");

header("Location: http://localhost/public/jojo-vanilla");