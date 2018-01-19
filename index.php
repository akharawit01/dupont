<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frédéric DUPONT - Photographe</title>
    <?php include "share/link.php" ?>
</head>
<body>
    <ul class="list-inline fixed-top fixed-lg">
        <li class="list-inline-item"><a href="#" class="lg active">Fr</a></li>
        <li class="list-inline-item"><a href="#" class="lg">En</a></li>
    </ul>
    <img src="images/logo.jpg" alt="Logo" class="mx-auto home-logo mt-5">
    <div class="container pt-6">
        <div class="row">
            <div class="col-lg-7">
                <ul class="rslides mb-4">
                    <li><img src="http://www.apicius.es/wp-content/uploads/2012/07/IMG-20120714-009211.jpg" alt=""></li>
                    <li><img src="http://www.apicius.es/wp-content/uploads/2012/07/IMG-20120714-009211.jpg" alt=""></li>
                    <li><img src="http://www.apicius.es/wp-content/uploads/2012/07/IMG-20120714-009211.jpg" alt=""></li>
                </ul>
                <p class="font-italic text-center">“Behind the veil of Frederic Dupont’s photographs, the silent stream of stars.”</p>
                <p class="font-weight-bold font-italic text-right">christian Bobin</p>
            </div>
            <div class="col-lg-5">
                <img src="images/logo.jpg" alt="Logo" class="mx-auto d-block home-logo hid-md-dw">
                <div class="d-flex align-items-center" style="height: 100%">
                    <ul class="text-uppercase menu-main">
                        <li><a href="2.php">photographies</a></li>
                        <li><a href="3.php">expositions</a></li>
                        <li><a href="4.php">publications</a></li>
                        <li><a href="5.php">voyages</a></li>
                        <li><a href="6.php">biographie</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <footer class="text-right pt-5 pb-2">
            <ul class="list-inline bd-r ">
                <li class="list-inline-item"><a href="#"><img src="images/logo-facebook.png" alt=""></a></li>
                <li class="list-inline-item"><a href="#"><img src="images/logo-insta.png" alt=""></a></li>
                <li class="list-inline-item"><a href="#"><img src="images/logo-youtube.png" alt=""></a></li>
                <li class="list-inline-item"><a href="7.php" class="text-uppercase">contact</a></li>
            </ul>
        </footer>
    </div>
    
    <?php include "share/script.php" ?>
    <script>
        $(document).ready(function() {
            $(".rslides").responsiveSlides();
        });
    </script>
</body>
</html>