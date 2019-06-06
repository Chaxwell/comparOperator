<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Les plus belles destinations avec comparOperator</title>

</head>

<body>
    <?php require('partials/navbar.php');

    ?>
    <!--  1ere ligne de carte de destination -->
    <div class="container">
        <h4 class="text-center mb-5 mt-5" style="font-family: Karla, sans-serif;">Faites votre choix parmis nos <strong>neuf</strong> destinations disponibles et des dizaines de Tour operator !</h4>
        <div class="testoooo d-flex flex-wrap justify-content-center">
            <div class="card destinations shadow mb-5 mx-4 bg-white rounded" style="width: 18rem;">
                <img src="assets/img/destinations/maroc.jpg" class="card-img-top" alt="photo paysage maroc">
                <div class="card-body">
                    <h5 class="card-title">Maroc / Marrakech</h5>
                    <p class="card-text"> À partir de 450 $ <br>
                        <br>Voir les Tours Operator.</p>
                </div>
                <a href="pages/touroperators.php?destination=maroc" class="destination stretched-link"></a>
            </div>

            <div class="card destinations shadow mb-5 mx-4 bg-white rounded" style="width: 18rem;">
                <img src="assets/img/destinations/bresil.jpg" class="card-img-top" alt="photo paysage bresil">
                <div class="card-body">
                    <h5 class="card-title">Bresil / Rio de Janeiro</h5>
                    <p class="card-text"> À partir de 680 $ <br>
                        <br>Voir les Tours Operator.</p>
                </div>
                <a class="destination stretched-link" href="pages/touroperators.php?destination=bresil"></a>
            </div>

            <div class="card destinations shadow mb-5 mx-4 bg-white rounded" style="width: 18rem;">
                <img src="assets/img/destinations/ilemaurice.jpg" class="card-img-top" alt="photo paysage Ile Maurice">
                <div class="card-body">
                    <h5 class="card-title">Ile Maurice / Belle Mare</h5>
                    <p class="card-text"> À partir de 842 $ <br>
                        <br>Voir les Tours Operator.</p>
                </div>
                <a class="destination stretched-link" href="pages/touroperators.php?destination=ile%20maurice"></a>
            </div>

            <div class="card destinations shadow mb-5 mx-4 bg-white rounded" style="width: 18rem;">
                <img src="assets/img/destinations/portugal.jpg" class="card-img-top" alt="photo paysage Portugal">
                <div class="card-body">
                    <h5 class="card-title">Portugal / Lisbonne</h5>
                    <p class="card-text"> À partir de 57 $ <br>
                        <br>Voir les Tours Operator.</p>
                </div>
                <a class="destination stretched-link" href="pages/touroperators.php?destination=portugal"></a>
            </div>

            <div class="card destinations shadow mb-5 mx-4 bg-white rounded" style="width: 18rem;">
                <img src="assets/img/destinations/japon.jpg" class="card-img-top" alt="photo paysage Japon">
                <div class="card-body">
                    <h5 class="card-title">Japon / Osaka</h5>
                    <p class="card-text"> À partir de 1880 $ <br>
                        <br>Voir les Tours Operator.</p>
                </div>
                <a class="destination stretched-link" href="pages/touroperators.php?destination=japon"></a>
            </div>

            <div class="card destinations shadow mb-5 mx-4 bg-white rounded" style="width: 18rem;">
                <img src="assets/img/destinations/usa.jpg" class="card-img-top" alt="photo paysage USA">
                <div class="card-body">
                    <h5 class="card-title">USA / New York</h5>
                    <p class="card-text"> À partir de 699 $ <br>
                        <br>Voir les Tours Operator.</p>
                </div>
                <a class="destination stretched-link" href="pages/touroperators.php?destination=usa"></a>
            </div>

            <div class="card destinations shadow mb-5 mx-4 bg-white rounded" style="width: 18rem;">
                <img src="assets/img/destinations/france.jpg" class="card-img-top" alt="photo paysage France">
                <div class="card-body">
                    <h5 class="card-title">France / Corse</h5>
                    <p class="card-text"> À partir de 499 $ <br>
                        <br>Voir les Tours Operator.</p>
                </div>
                <a class="destination stretched-link" href="pages/touroperators.php?destination=france"></a>
            </div>

            <div class="card destinations shadow mb-5 mx-4 bg-white rounded" style="width: 18rem;">
                <img src="assets/img/destinations/mexique.jpg" class="card-img-top" alt="photo paysage Mexique">
                <div class="card-body">
                    <h5 class="card-title">Mexique / Cancun</h5>
                    <p class="card-text"> À partir de 960 $ <br>
                        <br>Voir les Tours Operator.</p>
                </div>
                <a class="destination stretched-link" href="pages/touroperators.php?destination=mexique"></a>
            </div>

            <div class="card destinations shadow mb-5 mx-4 bg-white rounded" style="width: 18rem;">
                <img src="assets/img/destinations/espagne.jpg" class="card-img-top" alt="photo paysage Espagne">
                <div class="card-body">
                    <h5 class="card-title">Espagne / Barcelone</h5>
                    <p class="card-text"> À partir de 410 $ <br>
                        <br>Voir les Tours Operator.</p>
                </div>
                <a class="destination stretched-link" href="pages/touroperators.php?destination=espagne"></a>
            </div>
        </div>

        <?php require('partials/footer.php'); ?>


        <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="assets/vendor/popper.js/dist/popper.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/script.js"></script>
</body>

</html>
