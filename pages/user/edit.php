<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer un utilisateur</title>
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

    <h1>Editer un utilisateur</h1>

    <form action="../../assets/php/controllers/update_users.php" method="POST">
        <label for="user-edit">Choisir un utilisateur :</label>

        <select name="user-edit" id="user-edit">
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
        <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
        </div>
        <div>
            <label for="alias">Pseudonyme</label>
            <input type="text" id="alias" name="alias">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>