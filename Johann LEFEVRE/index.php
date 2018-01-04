<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" shrink-to-fit=no>
    <link href="assets/css/index.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


</head>

<body>

    <!----------------- C'est la Nav ------------------->

    <header>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    <div class="navbar-brand navbar-brand-centered">
                        <div class="col-xs-12"> <img id="logo" src="assets/css/img/logo_gaumart.png" /></div>
                    </div>
                </div>


                <div class="collapse navbar-collapse" id="navbar-brand-centered">
                    <ul class="nav navbar-nav">
                        <li><a href="reception.php">Réception d'entreprise</a></li>
                        <li><a href="evenement.php">Evènements privés</a></li>

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="traiteur.php">Traiteur</a></li>
                        <li><a href="references.php">Nos références</a></li>
                        <li><a href="contact.php">Nous contacter</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>



    <!----------------- Trait ------------------->

    <div class="hidden-xs" id="trait1"></div>
    <div class="hidden-xs" id="trait2"></div>

    <div class="hidden-xs" id="trait3"></div>
    <div class="hidden-xs" id="trait4"></div>


    <!----------------- C'est le Slider ------------------->



    <div id="carousel-example-generic" class="carousel slide" data-interval="false">



        <ol class="carousel-indicators">

            <li id="point" data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li id="point" data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li id="point" data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li id="point" data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li id="point" data-target="#carousel-example-generic" data-slide-to="4"></li>

        </ol>


        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="assets/css/img/SLIDER1.png" alt="Architecture" class="img-responsive center-block" alt="peinture">

                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="assets/css/img/SLIDER2.png" alt="Architecture" alt="peinture">
                <div class="carousel-caption">

                </div>
            </div>

            <div id="resizeimg" class="item">
                <img src="assets/css/img/SLIDER3.png" alt="Architecture" alt="peinture">
                <div class="carousel-caption">

                </div>
            </div>

            <div id="resizeimg" class="item">
                <img src="assets/css/img/SLIDER4.png" alt="Architecture" alt="peinture">
                <div class="carousel-caption">

                </div>
            </div>

            <div id="resizeimg" class="item">
                <img src="assets/css/img/SLIDER5.png" alt="Architecture" alt="peinture">
                <div class="carousel-caption">

                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"> </span>
                <span class="sr-only">Previous</span>
            </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>



    <!----------------- C'est le pied de page ! ------------------->


    <footer>
        <div class="footertext1">
            <center>
                <p>- GAUMART Traiteur Paris -</p>
            </center>
        </div>



        <div class="footertext2">
            <p>Mentions légales | Gateartproject © 2015</p>
        </div>
    </footer>



</body>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Javascript de Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script src="bootstrap/js/jquery-3.2.1.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</html>
