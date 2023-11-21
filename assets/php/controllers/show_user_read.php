<?php
    require_once('../middleware/connect.php');

    $user_log = $_POST['user-email'];
    
    $collections_read = $db_connect->query("SELECT * 
                                            FROM 
                                                collections_read 
                                            JOIN user ON user.email = collections_read.user_email 
                                            JOIN book ON book.title = collections_read.book_title 
                                            WHERE user.email = '$user_log'");
    
    foreach ($collections_read as $read) {
        echo 'Utilisateur : ' . $read['user_email']. ' Livre lu : ' . $read['book_title'].'<br>';
    }

?>
