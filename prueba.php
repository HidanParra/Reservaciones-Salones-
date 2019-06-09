

<?php
  $modulos = $db->select("modulos",["modulos.mod_nom"]);
  foreach ($modulos as $modulos => $mod){
    ?>



 <?php /* echo $mod["mod_nom"];*/ ?>
