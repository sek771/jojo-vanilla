<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un utilisateur</title>
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

    <form action="../../assets/php/controllers/delete_users.php" method="POST">
        <label for="user-delete">Choisir un utilisateur :</label>

        <select name="user-delete" id="user-delete">
            <option value="">----</option>
            <?php 

                require_once('../../assets/php/middleware/connect.php');

                $users = $db_connect->query("SELECT * FROM user");

                foreach($users as $user) {

                    $user_email = $user['email'];

                    echo "<option value='$user_email'>$user_email</option>";
                }

            ?>
        </select>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>