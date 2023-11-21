<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un livre</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <script src="../../assets/js/main.js"></script>
</head>
<body class="bg-color">
    <div>
        <header>
            <nav>
                <ul class="glass position">
                    <li>
                        <a href="../../index.php"class="text-a">Accueil</a>
                    </li>
                    <li>
                        <a href="./show.php"class="text-a">Afficher</a>
                    </li>
                    <li>
                        <a href="./create.php"class="text-a">Créer</a>
                    </li>
                    <li>
                        <a href="./edit.php"class="text-a">Editer</a>
                    </li>
                    <li>
                        <a href="./delete.php"class="text-a">Supprimer</a>
                    </li>
                </ul>
            </nav>
        </header>
    </div>
    <h1>Supprimer un livre</h1>
    <form action="../../assets/php/controllers/delete_books.php" method="POST" class="form">
        <label for="book-delete">Choisir le livre :</label>

        <select name="book-delete" id="book-delete" class="select">
            <option value="">----</option>
            <?php 

                require_once('../../assets/php/middleware/connect.php');

                $books = $db_connect->query("SELECT * FROM book");

                foreach($books as $book) {

                    $book_title = $book['title'];

                    echo "<option value='$book_title'>$book_title</option>";
                }

            ?>
        </select>
        <button type="submit" class="btn-donate">Envoyer</button>
    </form>
</body>
</html>