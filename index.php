<?php
require '_connec.php';
$pdo = new PDO(DSN, USER, PASS);
$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <form action="result.php" method="post">
                <div>
                        <label for="prenom">Prénom :</label><br>
                        <input type="text" id="user_firstname" name="user_firstname" required />
                </div>
                <div>
                        <label for="nom">Nom :</label><br>
                        <input type="text" id="user_lastname" name="user_lastname" required />
                </div>
                <div class="button">
                        <button type="submit">Envoyer</button>
                </div>
        </form>
        <ul>
                <?php foreach ($friends as $friend) : ?>
                        <li>
                                <?php echo $friend['firstname'] . ' ' . $friend['lastname'] ?>
                        </li>
                <?php endforeach ?>
        </ul>
</body>

</html>