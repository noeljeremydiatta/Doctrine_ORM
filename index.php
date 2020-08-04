<?php
require_once "config/autoload.php";
use src\controller\ClientController;
use src\controller\CompteController;

$clientsdao = new ClientController();
$clientsdao->add();

$comptesdao = new CompteController();
$comptesdao->add();
//$clientsdao->getAll();

?>