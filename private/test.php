<?php

require_once('Crud.php');

$crud = new Crud();
//$crud->insertPet($pet=["Bruno", "Male", 3, "Brown", "Dog", "Bulldog", "Enjoys exercising and sleeping"]);

//echo $crud->removeAll();

var_dump($crud->getById(1));

 ?>
