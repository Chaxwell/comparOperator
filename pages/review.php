<?php
require('../partials/classes/Manager.php');
require('../partials/debug/pprint.php');
require('../partials/cfg/db.php');
require('../partials/classes/Review.php');

if (isset($_GET['to'])) {
    $manager = new Manager($db);
    $data = $manager->getReviewsByOperatorId($_GET['to']);
} else {
    die('Pas de get');
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>commentaires</title>

    <style>
        #btn-commentaire {
            margin-top: 50px;
            color:
        }

        #affichageCommentaire {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <?php require('../partials/navbar.php') ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <form action="../processings/process-review.php" method="post" enctype="multipart/form-data">
                    <label>Nom ou pseudo :</label>
                    <input class="form-control shadow" name="nom" type="text" required>
            </div>
            <div class="col-sm-12 col-md-4">
                <label>Laisser un commentaire :</label>
                <textarea class="form-control shadow" name="commentaireTO" type="text" required></textarea>
            </div>

            <!-- <div class="col-sm-12 col-md-3">
                <label>Laisser une note /5:</label>
                <input class="form-control shadow" name="noteTO" type="text">
            </div> -->

            <input type="hidden" name="to" value="<?= $_GET['to'] ?>">
            <div class="col-sm-12 col-md-2">
                <button id="btn-commentaire" name="submit" class="btn btn-outline-orange" type="submit">Envoyer</button>
            </div>
            </form>
        </div>
    </div>

    <!-- affichage des commentaires -->

    <div class="container">
        <div class="row">
            <div class="col-md-12 sm-12">
                <div id="affichageCommentaire" class="card shadow" width="90%">
                    <div class="card-body">
                        <?php
                        foreach ($data as $d) {
                            echo '<br>';
                            echo "{$d['message']} de la personne : {$d['author']}";
                            echo '<br>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- FIN DU BLOCK COMMENTAIRE -->

        <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="../assets/vendor/popper.js/dist/popper.min.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

        <script src="../assets/js/script.js"></script>
</body>

</html>
