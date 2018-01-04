<?php
           $nom = $_POST['Nom'];
           $societe = $_POST['Societe'];
           $email = $_POST['Email'];
           $tel = $_POST['Tel'];
           $message = $_POST['Message'];
       try {
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

$bdd=new PDO('mysql:host=localhost;dbname=traiteur_gaumart','root','',$pdo_options);

}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
   try
   {
           $req = $bdd->prepare("INSERT INTO contactS (Nom, Societe, Email, Tel, Message) VALUES(:Nom, :Societe, :Email, :Tel, :Message)");
   $req->execute(array("Nom" => $_POST['Nom'], "Societe" => $_POST['Societe'], "Email" => $_POST['Email'], "Tel" => $_POST['Tel'], "Message" => $_POST['Message']));
       }

catch(Exception $e)
{
die('Erreur : '.$e->getMessage());

}
?>



<html>
    <head><title>Information sur les contacts</title></head>
    <body>
        <h2>Vous souhaitez voir :</h2>
         <form name="info" method="post" action="info_contact.php">
            <select name="info">
                <option value="Email" <?php if($info =='Email') { echo 'selected'; } ?>>Tout les mails des contacts</option>
                <option value="Societe" <?php if($info =='Societe') { echo 'selected'; } ?>>Toutes les sociétés des contacts</option>
                 </select>
            <input type="submit" name="valider" value="OK"/><br/>
             <input type="submit" name="quitter" value="Retour à la page d'accueil"/>
        </form>

     <?php

        if (isset ($_POST['info'])){

            connectMaBase();

             // Selectionne Tout les emails des contacts avec la valeur/value : Email
            if($info=='Email'){

                $sql='SELECT Email from contacts';
                $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
                echo'<h3>Tout les emails des contacts</h3>';
                while ($data = mysql_fetch_array($req)) {
                    echo $data['Email'].'<br/>';
                }
                 // Libère le mysql
                mysql_free_result ($req);
            }
            // Selectionne Toutes les sociétés des contacts avec la valeur/value : Societe
            elseif($info=='Societe'){

                $sql='SELECT Societe from contacts';
                $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
                echo'<h3>Toutes les sociétés des contacts</h3>';
                while ($data = mysql_fetch_array($req)) {
                    echo $data['Societe'].'<br/>';
                }
                 // Libère le mysql
                mysql_free_result ($req);
            }
           else{
              echo'Vous n\'avez rien sélectionné ?';
           }

        mysql_close ();
        }
        ?>
    </body>
</html>
