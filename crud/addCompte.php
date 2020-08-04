<?php
require_once "../bootstrap.php";

$compte = new Compte();
$compte->setTyco("Epargne");

$entityManager->persist($compte);
$entityManager->flush();

echo $client->getId(); 
 
?>