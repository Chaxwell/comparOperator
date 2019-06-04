<?php
require('../partials/classes/Manager.php');
require('../partials/classes/Destination.php');
require('../partials/cfg/db.php');
require('../partials/debug/pprint.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Document</title>

</head>

<body>
    <?php require('../partials/navbar.php'); ?>

    <div class="sidenav">
        <a href="http://comparoperator.loc:8080/">Site comparOperator</a><br>
        <a href="http://comparoperator.loc:8080/admin/index.php">Ajouter un T.O</a><br>
        <a href="http://comparoperator.loc:8080/admin/assign.php">Assigner un T.O / destination</a>
    </div>

    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/popper.js/dist/popper.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>
