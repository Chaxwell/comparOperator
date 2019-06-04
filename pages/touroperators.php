<?php
require('../partials/classes/Manager.php');
require('../partials/classes/Destination.php');
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
    'ile%20maurice',
    'espagne'
];


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

<body class="page-to">
    <?php require('../partials/navbar.php') ?>

    <div class="container">
        <?php
        if (isset($_GET['destination'])) {
            $destination = htmlspecialchars($_GET['destination']);

            $dest = new Destination([
                'location' => $destination,
            ]);

            // par exemple : maroc
            if (in_array($destination, $allowedDestinations)) {
                $operators = $manager->getOperatorByDestination($destination);
                // if $dataDestinations['location'] = $destination;
                $viewTemplate = '';

                // pprint($operators);
                foreach ($operators as $operator) {
                    $dataDestinations = $manager->getDestinationsByOperatorId($operator['id']);
                    $dataReviews = $manager->getReviewsByOperatorId($operator['id']);

                    // Get le prix ?
                    // foreach ($dataDestinations as $data) {
                    //     if (in_array($destination, $data['location'])) {

                    //     }
                    // }


            echo "<div class=\"row mb-5\">
            <div class=\"card col-10 col-sm-12 col-md-12 mx-auto shadow\">
                <div class=\"row no-gutters\">
                    <div class=\"card-logo col-10 col-sm-4 col-md-2 my-3 ml-3\">
                        <a href=\"#\">
                            <img class=\"shadow-sm img-operator img-fluid\" src=\"http://picsum.photos/600\" alt=\"picsum\">
                        </a>
                        ";
                        if($manager->isOperatorPremium($operator['id'])) { //FIXME:
                        echo "<div class=\"premium mt-3 d-flex justify-content-center\">
                            <a href=\"#\" class=\"btn btn-outline-orange w-100\">Visiter</a>
                        </div>";
                        }
                   echo " </div>
                    <div class=\"card-description col-10 col-sm-7 col-md-9 my-3 ml-3 text-center\">
                        <div class=\"row no-gutters\">
                            <div class=\"name col-12 col-sm-12 col-md-12 col-lg-5\">
                                {$operator['name']}
                            </div>
                            <div class=\"location col-12 col-sm-12 col-md-12 col-lg-7 pt-2 mb-3\">
                                {$destination}
                            </div>
                        </div>
                        <div class=\"row no-gutters\">
                            <div class=\"review col-12 col-sm-8 col-md-9 col-lg-10\">
                                <p class=\"message even\">
                                    <span class=\"grade d-flex justify-content-center flex-wrap\">
                                        &starf;&starf;&starf;&star;&star;
                                    </span>
                                    <i>Michelle :</i> Lorem ipsum bla bla dolor amet sic machin doctor truc bidule (max 110)
                                </p>
                                <p class=\"message odd\">
                                    <span class=\"grade d-flex justify-content-center flex-wrap\">
                                        &starf;&starf;&starf;&starf;&star;
                                    </span>
                                    <i>Michelle :</i> Lorem ipsum bla bla dolor amet sic machin doctor truc bidule (max 110)
                                </p>
                                <p class=\"message even\">
                                    <span class=\"grade d-flex justify-content-center flex-wrap\">
                                        &starf;&starf;&starf;&starf;&starf;
                                    </span>
                                    <i>Michelle :</i> Lorem ipsum bla bla dolor amet sic machin doctor truc bidule (max 110)
                                </p>
                            </div>
                            <div class=\"price col-12 col-sm-4 col-md-3 col-lg-2 d-flex justify-content-center align-items-center\"><span class=\"currency\">1655€</span></div>
                        </div>
                        <!-- Makes the whole card clickable -->
                        <a href=\"#\" class=\"stretched-link\"></a>
                    </div>
                </div>
            </div>
        </div>
            ";
                };
            }
        } ?>
    </div>
</body>

<script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../assets/vendor/popper.js/dist/popper.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/js/script.js"></script>
</body>

</html>
