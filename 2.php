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
    <?php include "share/header.php" ?>
    <div class="container">
        <div class="box-main_ori">
            <div class="loader"></div>
            <div class="row d-flex align-items-stretch md-rs_row" id="showLoad">
                <div class="col-lg-3 mb-3">
                    <div class="bg-pho_clr py-3" style="height: 100%">
                        <ul class="phototxt-list">
                            <li class="mt-3">+ recent work
                                <ul class="pl-4">
                                    <li><a href="#" class="active">Burma</a></li>
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
                    <span class="pgwName">ABC_36</span>
                    <ul class="pgwSlider">
                        <li><img src="images/1.jpg" data-description="Eiffel Tower and Champ de Mars"></li>
                        <li><img src="images/2.jpg" data-description="Eiffel"></li>
                        <li><img src="http://static.pgwjs.com/img/pg/slider/shanghai.jpg" data-description="Eiffel Name"></li>
                    </ul>
                </div>
            </div>
        </div>

        <?php include "share/footer.php" ?>
    </div>
    
    <?php include "share/script.php" ?>
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