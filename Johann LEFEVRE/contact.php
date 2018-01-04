<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/contact.css" rel="stylesheet" type="text/css">
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


    <!----------------- Contact ------------------->



    <div id="textegauche">

        <br/>
        <br/>
        <center>
            <h3><b id="color">GAUMART</b></h3>
        </center><br/>

        <p id="textestyle1"><b>Tél : 01 45 83 78 78</b><br>
            <br/>
            <b id="color1">Email :gaumart75@orange.fr</b></p>

        <p id="devis"><a href="devis.php">Lien pour un devis</a></p>

    </div>


    <div id="img6">
        <div class="hidden-xs"> <img src="assets/css/img/contact.jpg" class="img-responsive" /></div>
    </div>

    <div id="formulaire">

        <form name="monFormulaire" id="monFormulaire" method="post" required="required" action="contact.php">

            <input name="nom" id="nom" size="80" placeholder="NOM*" required="required"><br/>

            <input name="societe" id="societe" size="80" placeholder="SOCIETE*" required="required"><br/>

            <input name="email" id="mail" size="80" placeholder="EMAIL*" required="required"><br/>

            <input name="tel" id="tel" size="80" placeholder="TEL" required="required"><br/>

            <textarea name="message" id="message" placeholder="MESSAGE" required="required"></textarea>

            <div>
                <button type="submit" name="valider" value="valider"><b>ENVOYER</b></button>
            </div>


        </form>

    </div>

    <?php
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=contact;charset=utf8', 'root', '');
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }
        if (isset ($_POST['valider'])){
            $nom=$_POST['nom'];
            $societe=$_POST['societe'];
            $email=$_POST['email'];
            $tel=$_POST['tel'];
            $message=$_POST['message'];

            $bdd->exec("INSERT INTO personne (nom, societe, email, tel, message) VALUES('$nom','$societe','$email','$tel','$message')");
        }
        ?>

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
