<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <script defer src="../../assets/js/main.js"></script>
</head>
<body>
    <header>
            <nav>
                <ul>
                    <li>
                        <a href="../../index.php">Accueil</a>
                    </li>
                    <li>
                        <a href="./show.php">Afficher</a>
                    </li>
                    <li>
                        <a href="./create.php">Créer</a>
                    </li>
                    <li>
                        <a href="./edit.php">Editer</a>
                    </li>
                    <li>
                        <a href="./delete.php">Supprimer</a>
                    </li>
                </ul>
            </nav>
        </header> 
        <?php 

            require_once('../../assets/php/middleware/connect.php');

            $books = $db_connect->query("SELECT user.email, book.title FROM collections_read INNER JOIN user ON user.email = collections_read.user_email INNER JOIN book ON book.title = collections_read.book_title");

            foreach($books as $book) {

                $user_title = $book['email'];
                $book_title = $book['title'];

                echo $user_title . ' ' . $book_title . '<br />';
            }

        ?>
</body>
</html>
