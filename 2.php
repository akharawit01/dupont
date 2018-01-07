<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frédéric DUPONT - Photographe</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/pgwslider/pgwslider.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
    <?php include "share/header.php" ?>
    <div class="container pt-6">
        <div class="p-4 mt-3 box-main_ori">
            <div class="loader"></div>
            <div class="row d-flex align-items-stretch md-rs_row" id="showLoad">
                <div class="col-lg-3 mb-3">
                    <div class="bg-pho_clr py-3" style="height: 100%">
                        <ul class="phototxt-list">
                            <li class="mt-3">+ recent work
                                <ul class="pl-4">
                                    <li><a href="#">Burma</a></li>
                                </ul>
                            </li>
                            <li class="mt-3">+ recent work
                                <ul class="pl-4">
                                    <li><a href="#">Burma</a></li>
                                </ul>
                            </li>
                            <li class="mt-3">+ recent work
                                <ul class="pl-4">
                                    <li><a href="#">Burma</a></li>
                                </ul>
                            </li>
                            <li class="mt-3">+ recent work
                                <ul class="pl-4">
                                    <li><a href="#">Burma</a></li>
                                </ul>
                            </li>
                            <li class="mt-3">+ recent work
                                <ul class="pl-4">
                                    <li><a href="#">Burma</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 pb-3">
                    <ul class="pgwSlider">
                        <li><img src="http://static.pgwjs.com/img/pg/slider/paris.jpg"></li>
                        <li><img src="http://static.pgwjs.com/img/pg/slider/montreal.jpg"></li>
                        <li><img src="http://static.pgwjs.com/img/pg/slider/shanghai.jpg"></li>
                        <li><img src="http://static.pgwjs.com/img/pg/slider/shanghai.jpg"></li>
                        <li><img src="http://static.pgwjs.com/img/pg/slider/shanghai.jpg"></li>
                        <li><img src="http://static.pgwjs.com/img/pg/slider/shanghai.jpg"></li>
                        <li><img src="http://static.pgwjs.com/img/pg/slider/paris.jpg"></li>
                        <li><img src="http://static.pgwjs.com/img/pg/slider/montreal.jpg"></li>
                        <li><img src="http://static.pgwjs.com/img/pg/slider/shanghai.jpg"></li>
                        <li><img src="http://static.pgwjs.com/img/pg/slider/shanghai.jpg"></li>
                        <li><img src="http://static.pgwjs.com/img/pg/slider/shanghai.jpg"></li>
                        <li><img src="http://static.pgwjs.com/img/pg/slider/shanghai.jpg"></li>
                    </ul>
                </div>
            </div>
        </div>

        <?php include "share/footer.php" ?>
    </div>
    
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/pgwslider/pgwslider.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            var pgwSlider = $('.pgwSlider').pgwSlider();
            pgwSlider.reload({
                intervalDuration : 8000,
                displayControls: true
            });

            setTimeout(() => { 
                $('.loader').hide();
                $('#showLoad').css({'visibility': 'visible'});
            }, 600);

        });
    </script>
</body>
</html>