<?php
session_start();
?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>OIBfrance - Forum, témoignages, informations autour de la section internationale</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" />
	<link rel="shortcut icon" type="image/x-icon" href="SKETCH/oibicone.ico" />	
    <script src="SKETCH/processing.min.js"></script>
  </head > 
  
  <body>
    <?php include ("menuBarreNav.php");  
        
    if(isset($_SESSION['userID'])){
    echo '<h1>Bonjour '.$_SESSION['firstName'].'. Regarde <a href="Profil.php">ton profil!</a></h1>';
    }
    ?>
    <div class="wrapper">
      <h2>Un forum pour les élèves des sections OIB</h2> <br><br>
      <article class="img-info">
    <p  class="blocktext">Ce site a une vocation explicative de l'OIB - pour le moment en particulier pour la section américaine et la section anglaise. </p>
	<p  class="blocktext">Il s'agit cependant surtout d'un forum où les élèves des différents établissements OIB - toutes sections confondues - peuvent échanger entre eux et avec des anciens élèves, notamment à propos de l'épreuve, du cursus, et des études supérieures.  </p> 
    </article> 
   <img class="img-oib" src="oib.png" alt="Oib descriptif">
    </div>
  </body>

</html>





