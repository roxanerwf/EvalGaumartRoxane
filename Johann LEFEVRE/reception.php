<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Réceptions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/reception.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


</head>

<body>

    <!----------------- C'est la Nav ------------------->

    <header>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
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

                <!-- Collect the nav links, forms, and other content for toggling -->
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
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>


    <!----------------- Trait ------------------->

    <div class="hidden-xs" id="trait1"></div>
    <div class="hidden-xs" id="trait2"></div>

    <div class="hidden-xs" id="trait3"></div>
    <div class="hidden-xs" id="trait4"></div>




    <!----------------- Réception ------------------->

    <div id="textegauche">

        <center>
            <h3><b>Réceptions d'entreprise </b></h3>
        </center><br/>

        <p id="textestyle">Cocktail Apéritif, Déjeunatoire ou Dinatoire,<br/> buffet chaud ou froid,<br/> plateaux-repas, pauses salées et sucrées,<br/> petit déjeuner d'affaires,...</p>

    </div>

    <div id="img1">
        <img src="assets/css/img/csm_traiteur_creatif_731aa686b3.jpg" class="img-responsive" />
    </div>

    <div id="img2">
        <img src="assets/css/img/sale_sucre.jpg" width="420" class="img-responsive" />
    </div>

    <div id="img3">
        <img src="assets/css/img/csm_patissier_traiteur_a_paris_2d2c89ae22retouche.jpg" width="450" class="img-responsive" />
    </div>

    <div id="img4">
        <img src="assets/css/img/csm_traiteur_patissier_9daec18485retouche.jpg" width="450" class="img-responsive" />
    </div>




    <!----------------- C'est le pied de page ! ------------------->


    <footer>
        <div class="footertext1">
            <center>
                <p>- GAUMART Traiteur Paris -</p>
            </center>
        </div>



        <div class="footertext2">
            <center>
                <p>Mentions légales | Gateartproject © 2015</p>
            </center>
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
