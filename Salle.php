<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Bienvenue dans la salle des prof  <h3> <?php echo $_SESSION["nom"]; ?></h3></p>
</body>
</html>