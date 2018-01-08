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
        <div class="row d-flex align-items-stretch box-main">
            <div class="col-md-4">
                <div class="txt-contact"></div>
                <!-- <img src="images/contact-imgLeft.jpg" alt="" class="img-fluid"> -->
            </div>
            <div class="col-md-8 form-contact p-5">
                <h2 class="text-center text-uppercase">contact</h2>
                <form class="pt-6 mb-5">
                    <div class="form-row">
                        <div class="col-lg-12 form-group">
                            <label for="Title" class="pr-3">Title: </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                <label class="form-check-label" for="inlineRadio1">Mr</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Mme</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Mlle</label>
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label for="name">Your name:</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label for="surname">Your surname:</label>
                            <input type="text" class="form-control" id="surname">
                        </div>
                        <div class="col-lg-12 form-group">
                            <label for="email">Your email:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="col-lg-12 form-group">
                            <label for="message">Your email:</label>
                            <textarea class="form-control" id="message" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="text-right"><button type="submit" class="btn btn-primary">OK</button></div>
                </form>
            </div>
        </div>
        
        <?php include "share/footer.php" ?>
    </div>
    
    <?php include "share/script.php" ?>
</body>
</html>