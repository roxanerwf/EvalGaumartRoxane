<?php
function connectMaBase(){
    $base = mysql_connect ('localhost', 'root', '');
    mysql_select_db ('eval1', $base);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
     
      
   <!-- MENU NAVIGATION -->      
      <nav class="row01">
       <input type="checkbox" id="nav" class="hidden"/>
        <label for="nav" class="nav-open"><i></i><i></i><i></i></label>
         <div class="nav-container">
          <ul>
           <li><a href="reception.php">Réceptions d'entreprise</a></li>
           <li><a href="prives.php">Evénements privés</a></li>
           <li><a href="traiteur.php">Traiteur</a></li>
            <div class="line" id="line1"></div>
            <li><a href="index.php"><img src="img/logo_gaumart.png" class="img-responsive" style="width:50px;"></a></li>
            <div class="line" id="line2"></div>
           <li><a href="references.php">Nos références</a></li>
           <li><a href="contact.php">Nous contacter</a></li>
           <li><a href="devis.php">Demande de devis</a></li>
          </ul>
         </div>
        </nav>
     
    <!-- CONTENU --> 
     <div class="container">
      <div class="row08" id="">
       <div id="left3">
           <br /><br />
         <p style="font-size:1.5em;"><span style="color:orange;font-weight:bold;">GAUMART</span><br />
           <br />
          Tel : 01 45 83 76 78<br />
           <br />
          Email : <span style="color:orange;">gaumart75@orange.fr</span></p><br />
           <br />
                 
          <img src="img/dessert-2696759_1920.jpg" class="img-responsive" id="blueberry"><!--style="width:70%; margin-left:-10em;"-->
       </div>                
 
         
       <div id="right3" >
         <h1>Formulaire de contact</h1>
            <form name="contact" method="post" action="contact.php" >
       
             <input type="text" name="nom" placeholder="NOM" />  
               <br/><br/>
             <input type="text" name="societe"  placeholder="SOCIETE*" /> 
              <br/><br/>
             <input type="text" name="email"  placeholder="EMAIL*" /> 
              <br/><br/>
             <input type="text" name="tel"  placeholder="TEL" />
              <br/><br/>
             <textarea id="message" name="message" placeholder="MESSAGE *" ></textarea>
              <br/><br/>
              
             <button type="submit" name="valider" >Envoyer </button>
            </form>
      </div>

     </div>
    </div> <!-- Fermeture div container -->
        
    <!-- FOOTER --> 
     <div class="row03">
      <div id="footer">
        <h1>- GAUMART Traiteur Paris -</h1> 
        <h4 style="font-style:italic;">Mentions légales / Getartproject © 2015</h4>
      </div>
     </div>
        
  </body>
</html>

<?php
if (isset ($_POST['valider'])) {
$Nom=$_POST['nom'];
$Societe=$_POST['societe'];
$Email=$_POST['email'];
$Tel=$_POST['tel'];
$Message=$_POST['message'];

connectMaBase();

$sql = 'INSERT INTO Contacts VALUES(NULL,"'.$Nom.'","'.$Societe.'","'.$Email.'","'.$Tel.'","'.$Message.'")';

mysql_query($sql) or die ('Erreur SQL !'.$sql.'<br/>'.mysql_error()) ;

mysql_close() ;
}
?>