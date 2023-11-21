<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer profil</title>
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


    
    <form action="../../assets/php/controllers/delete_user_read.php" method="POST">


        <label for="read-delete">Supprimer :</label>

        <select name="read-delete" id="read-delete">
            <option value="">----</option>
            <?php 

                require_once('../../assets/php/middleware/connect.php');

                $reads = $db_connect->query("SELECT * FROM collections_read");

                foreach($reads as $read) {

                    $read_email = $read['user_email'];

                    echo "<option value='$read_email'>$read_email</option>";
                }

            ?>
        </select>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>