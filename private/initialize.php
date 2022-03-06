
<?php

define("APP_ROOT", dirname(dirname(__FILE__)));
define("PRIVATE_PATH", APP_ROOT . "/private");

require_once(PRIVATE_PATH . "/Pet.php");
require_once(PRIVATE_PATH . "/Crud.php");
require_once(PRIVATE_PATH . "/Admin.php");

$crud  = new Crud();
$pet   = new Pet();
$admin = new Admin();
$crud->createPetTable();

 ?>
