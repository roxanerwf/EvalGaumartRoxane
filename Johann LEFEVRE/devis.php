<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Devis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/devis.css" rel="stylesheet" type="text/css">
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

    <!----------------- Devis ------------------->


    <div id="textegauche">

        <br/>
        <br/>
        <center>
            <h3><b id="color">GAUMART</b></h3>
        </center><br/>

        <p id="textestyle1"><b>Tél : 01 45 83 78 78</b><br/>
            <br/>
            <b id="color1">Email :gaumart75@orange.fr</b></p>

    </div>


    <div id="formulaire">

        <form name="devis" id="devis" method="POST" required="required" action="devis.php">



            <div id="reception">
                <fieldset>
                    <legend>Réception</legend>
                    <label for="prestation">Type de prestation :</label><br/>


                    <input name="checkbox1" type="checkbox" value="0">Cocktail apéritif<br/>
                    <input name="checkbox2" type="checkbox" value="0">Cocktail déjeunatoire/dinatoire<br/>
                    <input name="checkbox3" type="checkbox" value="0">Buffet debout<br/>
                    <input name="checkbox4" type="checkbox" value="0">Buffet assis<br/>
                    <input name="checkbox5" type="checkbox" value="0">Repas servi à l'assiette<br/>
                    <input name="checkbox6" type="checkbox" value="0">Petit déjeuner<br/> Autres : <input name="autres"><br/><br/>

                    <label for="lieu">Lieu de réception :</label><input name="lieu"><br/><br/>
                    <label for="date">Date de réception :</label><input name="date" type="date"><br/><br/>
                    <label for="heuredebut">Heure de Début :</label><input type="time" name="heuredebut"> <br /><br/>
                    <label for="heurefin">Heure de fin :</label><input type="time" name="heurefin"> <br /><br/>
                    <label for="nombre">Nombre de convives :</label><input name="nombre"><br/><br/>
                    <label for="personnels">Personnels souhaités :</label><input name="personnel" type="radio">Oui<input name="personnel" type="radio">Non
                </fieldset>
            </div>


            <div id="services">
                <fieldset>
                    <legend>Services</legend>
                    <label for="boissonalcool">Boissons alcolisées :</label><br/>
                    <input name="boissona" type="checkbox" value="1">Vin rouge<br/>
                    <input name="boissona" type="checkbox" value="2">Vin blanc<br/>
                    <input name="boissona" type="checkbox" value="3">Champagne<br/>
                    <input name="boissona" type="checkbox" value="4">Crémant<br/>
                    <input name="boissona" type="checkbox" value="5">Kir<br/>
                    <input name="boissona" type="checkbox" value="6">Alcool fort<br/><br/>

                    <label for="boissonnonalcool">Boissons non alcolisées :</label><br/>
                    <input name="boissonna" type="checkbox" value="1">Eaux minérales plate et gazeuse<br/>
                    <input name="boissonna" type="checkbox" value="2">Café<br/>
                    <input name="boissonna" type="checkbox" value="3">Softs (jus de fruits et sodas<br/><br/>

                    <label for="besoins complémentaires">Besoins complémentaires :</label><br/>
                    <input name="besoin" type="checkbox" size="1">Matériel jetable<br/>
                    <input name="besoin" type="checkbox" size="2">Matériel de réception à louer<br/>
                    <input name="besoin" type="checkbox" size="3">Personnel de service<br/>
                    <input name="besoin" type="checkbox" size="4">Décoration de buffet<br/>
                    <input name="besoin" type="checkbox" size="5">Décoration florale<br/>
                    <input name="besoin" type="checkbox" size="6">Centre de table en fleurs fraiches<br/>
                    <input name="besoin" type="checkbox" size="7">Nappage<br/>
                    <input name="besoin" type="checkbox" size="8">Animation musicale<br/>
                    <input name="besoin" type="checkbox" size="9">Salle de reception<br/> Autres : <input name="autresp"><br/><br/>
                </fieldset>
            </div>



            <div id="budget">
                <fieldset>
                    <legend>Votre Budget</legend>
                    <label for="budget">Budget par personne :</label>Entre<input name="budget">et<input name="budget"><br/><br/>
                </fieldset>
            </div>


            <div id="coordonnees">
                <fieldset>
                    <legend>Vos coordonnées</legend>
                    <label for="nom">Nom :</label><input name="nom"><br/>
                    <label for="prenom">Prénom :</label><input name="prenom"><br/>
                    <label for="societe">Société :</label><input name="societe"><br/>
                    <label for="adresse">Adresse :</label> <input name="adresse"><br/>
                    <label for="telephone">Téléphone :</label><input name="telephone"><br/>
                    <label for="email">Email :</label><input name="email"><br/><br/>
                </fieldset>
            </div>


            <button type="submit" name="valider" value="valider"><b>ENVOYER</b></button>


        </form>

    </div>

    <!----------------- PHP ------------------->







    <?php
try {
$bdd = new PDO('mysql:host=localhost;dbname=devis;charset=utf8', 'root', '');
} catch (PDOException $e) {
echo 'Connexion échouée : ' . $e->getMessage();
}
if (isset ($_POST['valider'])){
    $checkbox1=$_POST['checkbox1'];
    $autres=$_POST['autres'];
    $lieu=$_POST['lieu'];
    $date=$_POST['date'];
    $heuredebut=$_POST['heuredebut'];
    $heurefin=$_POST['heurefin'];
    $nombre=$_POST['nombre'];
    $personnel=$_POST['personnel'];
    



    

    $bdd->exec("INSERT INTO formulaire (checkbox1, autres, lieu, date, heuredebut, heurefin, nombre, personnel) VALUES('$checkbox1','$autres','$lieu','$date','$heuredebut','$heurefin','$nombre','$personnel')");
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
