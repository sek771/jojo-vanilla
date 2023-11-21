<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher les livres</title>
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
    
    <h1>Liste des livres</h1>

    <?php 

    require_once('../../assets/php/middleware/connect.php');

    $query_books = $db_connect->query('SELECT * FROM book');

    foreach ($query_books as $books) {
        echo $books['title'] . "<br/>";
    }

    ?>
</body>
</html>