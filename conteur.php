<?php
session_start();

require_once ("fonction.php"); // contient la fonction compteur

srand((double)microtime()*1000000); // durée de la session

if (!isset($_SESSION['visite'])) // si visite n'existe pas
{
  $visiteur = compteur(); // on ajout 1
  $_SESSION['visite'] = $visiteur; // on comptabilise le nombre de visiteur
}
else // sinon
{
  $lire = fopen("../compteur.txt","r+"); // on ouvre le fichier texte
  $compteur = fgets($lire,20); // on lit les 20 premiers caractères
  $_SESSION['visite'] = $compteur; // on comptabilise le nombre de visiteur
}

function compteur()
{
  $lire = fopen("compteur.txt","r+"); // voir dessus
  $compteur = fgets($lire,20); // voir dessus
  $compteur++; // on ajoute 1
  fseek($lire, 0);
  fputs($lire,$compteur);
  fclose($lire);
  return $compteur;
}

echo 'Il y a eu ' . $_SESSION['visite'] . ' visiteurs ';
?>
