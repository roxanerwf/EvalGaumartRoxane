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
        
     <div class="container">
         
    <!-- CONTENU --> 
     <div class="row009" id="">
         <div>
           <p style="font-size:1.5em;text-align:center;"><span style="color:orange;font-weight:bold;">GAUMART</span><br />
             <br />
            Tel : 01 45 83 76 78<br />
             <br />
            Email : <span style="color:orange;">gaumart75@orange.fr</span></p>
         </div>
     </div>
         
     <div class="row09" id="">
        <div id="left4">
            <form action="mailto:toto@toto.fr" method="get" enctype="text/plain" name="formulaire">
           
            <fieldset >
             <legend >Réception</legend>
              <label>Type de prestation :<br /><br />
               <input name="reception" type="checkbox" />Cocktail apéritif<br />
               <input name="reception" type="checkbox" />Cocktail déjeunatoire/dînatoire<br />
                <input name="reception" type="checkbox" />Buffet debout<br />
                <input name="reception" type="checkbox" />Buffet assis<br />
               <input name="reception" type="checkbox" />Repas servi à l'assiette<br />
               <input name="reception" type="checkbox" />Petit déjeuner<br /><br />
              </label>   
               
            <label>Autres :
             <input name="autre" type="text"  size="40" />
            </label>
             <br /><br>
               
            <label>Lieu de réception :
             <input name="lieu" type="text" id="lieu" />
            </label>
             <br /><br>
               
            <label>Date de réception :
             <input name="date" type="text" id="date" />
            </label>
             <br/><br>
               
            <label>Heure de début :
             <input name="heure" type="time" id="heured" />
            </label>
             <br/><br/>
               
            <label>Heure de fin :
             <input name="heure" type="time" id="heuref" />
            </label>
             <br/><br/>
               
            <label>Nombre de convives:
             <input name="convive" type="text" id="convive" />
            </label>
              <br/><br/>
               
             <p>Personnels souhaités :<br/>
            <label>
             <input type="radio" name="personnel" value="oui" />
             Oui</label>
              <br/>
            <label>
             <input type="radio" name="personnel" value="non" />
             </label>Non
              <br />
             </p>

            </fieldset>
           </form>
          </div>    <!--Fermeture div left4 -->            
 
        <div id="middle4">
            <form action="mailto:toto@toto.fr" method="get" enctype="text/plain" name="formulaire">  
              <fieldset id="services">
               <legend >Services</legend>
                <label>Boissons alcoolisées :<br/><br/>
                 <input name="reception" type="checkbox" s/>Vin rouge<br />
                 <input name="reception" type="checkbox" />Vin blanc<br />
                  <input name="reception" type="checkbox" />Vin rosé<br />
                  <input name="reception" type="checkbox" />Champagne<br />
                  <input name="reception" type="checkbox" />Crémant<br />
                 <input name="reception" type="checkbox" />Kir<br />
                 <input name="reception" type="checkbox" />Alcool fort<br />
                </label>   
            
                <label>Boissons non alcoolisées :
                 <input name="reception" type="checkbox" />Eaux minérales plate et gazeuse<br />
                  <input name="reception" type="checkbox"/>Café<br />
                 <input name="reception" type="checkbox" />Softs (jus de fruits et sodas)<br /><br />
                </label>
            
                <label>Besoins complémentaires :<br /><br />
                 <input name="reception" type="checkbox" />Matériel jetable<br />
                  <input name="reception" type="checkbox" />Matériel de réception à louer<br />
                   <input name="reception" type="checkbox" />Personnel de service<br />
                    <input name="reception" type="checkbox" />Décoration de buffet<br />
                     <input name="reception" type="checkbox" />Décoration florale<br />
                    <input name="reception" type="checkbox"/>Centre de table en fleurs fraîches<br />
                   <input name="reception" type="checkbox"/>Nappage<br />
                  <input name="reception" type="checkbox"/>Animation musicale<br />
                 <input name="reception" type="checkbox" />Salles de réception<br /><br />
                </label>
            
               <label>Autres :
                <input name="autre" type="text"  size="35" />
               </label>
                <br /><br />
                
            </fieldset> 
           </form>
          </div><!--Fermeture div middle4 --> 
          
          <div id="right4" >
            <form action="mailto:toto@toto.fr" method="get" enctype="text/plain" name="formulaire">
             
             <fieldset id="budget">
              <legend>Votre budget</legend>
               <label>Budget par personne :<br />
               Entre<input name="reception" type="text"/><br /><br />
               et<input name="reception" type="text"  />
               </label>
             </fieldset>
                
             <fieldset id="coordonnees">
              <legend>Vos coordonnées</legend>
               <label>Nom :<input name="reception" type="text" size="40" /></label><br /><br />
                <label>Prénom :<input name="reception" type="text" size="40" /></label><br /><br />
                 <label>Société :<input name="reception" type="text" size="40" /></label><br /><br />
                 <label>Adresse :<input name="reception" type="text" size="40" /></label><br /><br />
                <label>Téléphone :<input name="reception" type="text" size="40" /></label><br /><br />
               <label>Email :<input name="reception" type="text" size="40" /></label>
              </fieldset>
                
              <button type="submit">Envoyer votre demande de devis</button>

            </form>
           </div><!--Fermeture div right4 --> 

    </div><!--Fermeture div row09 --> 

    <!-- FOOTER --> 
     <div class="row03">
      <div id="footer">
        <h1>- GAUMART Traiteur Paris -</h1> 
        <h4 style="font-style:italic;">Mentions légales / Getartproject © 2015</h4>
      </div>
     </div>
        
      </div> <!-- Fermeture div container -->
       
     </body>
</html>