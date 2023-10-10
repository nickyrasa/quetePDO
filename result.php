<?php
require '_connec.php';
$pdo = new PDO(DSN, USER, PASS);
header('Location: ' . './index.php');

$firstname = $_POST['user_firstname'];
$lastname = $_POST['user_lastname'];

$query = 'INSERT INTO friend (firstname,lastname) VALUES (:a, :b)';
$statement = $pdo->prepare($query);

$statement->bindValue(':a', $firstname, PDO::PARAM_STR);
$statement->bindValue(':b', $lastname, PDO::PARAM_STR);


$statement->execute();


$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$pdo_quests = $statement->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <p>Votre prénom : <?php echo ($firstname) ?><br>
                votre nom : <?php echo ($lastname) ?></p>

</body>

</html>