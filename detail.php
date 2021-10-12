<?php
require_once("connexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <img src="<?= $details_perso[0]['nom_image']; ?>" alt="">
    <p><?= $details_perso[0]["historique"]; ?></p>
    </div>
</body>
</html>