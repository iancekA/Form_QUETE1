<?php
  echo nl2br("Merci " . $_POST['user_firstname'] . " " . $_POST['user_name'] . " de nous avoir contacté à propos de " . $_POST['user_subject'] . "\n");
  echo nl2br("Un de nos conseiller vous contactera soit à l’adresse  " . $_POST['user_email'] . " ou par téléphone " . $_POST['user_tel'] . " dans les plus brefs délais pour traiter votre demande : \n");
  echo nl2br($_POST['user_message']);
?>