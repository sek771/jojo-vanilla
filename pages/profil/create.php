<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer profil</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <script src="../../assets/js/main.js"></script>
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
    <form action="../../assets/php/controllers/create_user_read.php" method="POST">

    <label for="read-user">Choisir l'utilisateur :</label>

    <select name="read-user" id="read-user">
            <option value="">----</option>
            <?php 

                require_once('../../assets/php/middleware/connect.php');

                $users = $db_connect->query("SELECT collections_read.user_email FROM collections_read");

                foreach($users as $user) {

                    $user_email = $user['user_email'];

                    echo "<option value='$user_email'>$user_email</option>";
                }

            ?>
        </select>

        <label for="read-book">Choisir le livre :</label>

        <select name="read-book" id="read-book">
            <option value="">----</option>
            <?php 

                require_once('../../assets/php/middleware/connect.php');

                $books = $db_connect->query("SELECT book.title FROM book");

                foreach($books as $book) {

                    $book_title = $book['title'];

                    echo "<option value='$book_title'>$book_title</option>";
                }

            ?>
        </select>

        <button type="submit">Envoyer</button>

    </form>
</body>
</html>