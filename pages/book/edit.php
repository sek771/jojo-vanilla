<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer un livre</title>
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
    <h1>Editer un livre</h1>
    <form action="../../assets/php/controllers/update_books.php" method="post" class="form">
        <label for="book-edit">Choisir le livre :</label>
        
        <select name="book-edit" id="book-edit" class="select">
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
        <div>
            <input type="text" id="title" name="title" class="input" placeholder="title">
        </div>
        <div>
            <input type="text" id="sub_title" name="sub_title" class="input" placeholder="sub title">
        </div>
        <div>
            <input type="text" id="authors" name="authors" class="input" placeholder="authors">
        </div>
        <div>
            <input type="text" id="country" name="country" class="input" placeholder="country">
        </div>
        <div>
            <input type="text" id="editor" name="editor" class="input" placeholder="editor">
        </div>
        <div>
            <input type="text" id="image" name="image" class="input" placeholder="image">
        </div>
        <div>
            <input type="text" id="tome" name="tome" class="input" placeholder="tome">
        </div>
        <button type="submit" class="btn-donate">Envoyer</button>
    </form>
</body>
</html>