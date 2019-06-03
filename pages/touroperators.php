<?php
require('../partials/classes/Manager.php');
require('../partials/cfg/db.php');
require('../partials/debug/pprint.php');
$manager = new Manager($db);

$allowedDestinations = [
    'maroc',
    'bresil',
    'japon',
    'portugal',
    'japon',
    'usa',
    'mexique',
    'france',
    'ilemaurice',
    'espagne'
];

if (isset($_GET['destination'])) {
    $destination = htmlspecialchars($_GET['destination']);

    // par exemple : maroc
    if (in_array($destination, $allowedDestinations)) {
        $operators = $manager->getOperatorByDestination($destination);
        $viewTemplate = '';

        // pprint($operators);
        foreach ($operators as $operator) {
            $viewTemplate .= "
            <p>{$operator['name']}</p>
            ";
        };
    }
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
    <title>Nos agences de voyages partenaires</title>
</head>

<body>
    <?php require('../partials/navbar.php') ?>

    <div class="container">
        <div class="row">
            <div class="card col-10 col-sm-12 col-md-12 mx-auto shadow">
                <div class="row no-gutters">
                    <div class="card-logo col-6 col-sm-4 col-md-2 my-3 ml-3">
                        <img class="img-operator img-fluid" src="../assets/img/operators/alqueva-crop.jpg" alt="alqueva">
                        <div class="premium mt-2 d-flex justify-content-center">
                            <a href="#" class="btn btn-outline-orange w-100">Visiter</a>
                        </div>
                    </div>
                    <div class="card-description col-6 col-sm-7 col-md-9 my-3 ml-3 bg-danger">
                        <div class="price"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../assets/vendor/popper.js/dist/popper.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/js/script.js"></script>
</body>

</html>
