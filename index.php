<?php
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$mail = $_POST['mail'];
$topic = $_POST['topic'];
$phone = $_POST['phone'];
$message = $_POST["message"];

$topic = "Meaning of " . "$topic";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Merci </title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <h1</h1>
        <p>Merci <?= "$firstName $lastName"; ?> pour votre message au sujet de  "<?= $topic; ?>". </p>
        <p> Hubert Bonisseur de la Bath vous apportera son avis d'expert au  <?= $mail; ?> ou sur votre cellulaire intelligent <?= $phone; ?> quand ça lui chantera : </p>
        <p class=message><?= $message; ?></p>
    </div>
    </head>

</body>

</html>
