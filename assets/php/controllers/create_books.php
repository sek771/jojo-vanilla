<?php

require_once('../middleware/connect.php');

$title = $_POST['title'];
$sub_title = $_POST['sub_title'];
$authors = $_POST['authors'];
$country = $_POST['country'];
$editor = $_POST['editor'];
$image = $_POST['image'];
$tome = $_POST['tome'];

$db_connect->query("INSERT INTO book (id, title, sub_title, authors, country, editor, image, tome) VALUES (NULL, '$title', '$sub_title', '$authors', '$country', '$editor', '$image', '$tome')");

header("Location: http://localhost/public/jojo-vanilla");