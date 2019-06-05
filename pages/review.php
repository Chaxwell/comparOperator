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

</head>

<body>
    <?php require('../partials/navbar.php') ?>

        <!-- Formulaire our laisser un commentaire -->

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4">
                <form action="../processings/process-review.php" method="post">
                    <div class="form-group">
                        <input class="form-control shadow" name="nom" type="text" placeholder="Nom ou pseudo" required>
                    </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
            <div class="form-group">
                <textarea class="form-control shadow" name="commentaireTO" type="text" placeholder="Laisser votre review" required></textarea>
            </div>
            </div>

            <!--BONUS LAISSER UNE NOTE-->

            <!-- <div class="col-sm-12 col-md-3">
                <div class="form-group">
                <input class="form-control shadow" name="noteTO" type="text placeholder="Laisser une note /5">
            </div> -->

            <input type="hidden" name="to" value="<?= $_GET['to'] ?>">

            <div class="col-sm-12 col-md-2">
                <button id="btn-commentaire" name="submit" class="btn btn-outline-orange" type="submit">Envoyer votre review</button>
            </div>
            </form>
        </div>
    </div>

    <!-- affichage des commentaires -->

    <div id="affichageCommentaire" class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <th>Name</th>
                                <th>Reviews</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data as $d) {
                                    echo '
                                    <tr>
                                    <td>' . $d['author'] . '</td>
                                    <td>' . $d['message'] . '</td>
                                    </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
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
