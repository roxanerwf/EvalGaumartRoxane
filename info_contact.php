<?php
                
if(isset($_POST['quitter'])){
    header("location: contact.php");
}

// Le include Fonction.php que j'ai collé ici
function connectMaBase(){
    $base = mysql_connect ('localhost', 'root', '');
    mysql_select_db ('eval1', $base);
}
// 

if(isset($_POST['info'])){ 
    $info=$_POST['info'];
}
// info est le nom de mon formulaire
 
else{
    $info="Email"; 
}
// women est le nom de la 1ere option que je souhaite afficher dans le formulaire déroulant

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
            