<?php
function routing() : string // Cette fonction va vérifier si votre page a reçu un paramètre d'URL appellé route et renvoyer une string qui représente le nom du template à charger.
{
  if(isset($_GET['route']) && $_GET ['route'] === 'about') { // si route existe et vaut about return about
    return 'about';    
  } else if (isset($_GET['route']) && $_GET ['route'] === 'contact') { // si route existe et vaut contact return contact 
    return 'contact';
  } else { // sinon retourne homepage
    return 'homepage';
  }
}

$template = routing ();
require "templates/layout.phtml";

