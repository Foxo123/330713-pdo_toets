<?php 

include("./Pdo_handler.php");

$db_manager = new Pdo_handler();



$bodem = $db_manager->sanitize($_POST["bodem"]);
$saus = $db_manager->sanitize($_POST["saus"]);
$pizzatoppings = $db_manager->sanitize($_POST["pizzatoppings"]);


$kruiden = "";

if(isset($_POST["peterselie"])){
    $kruiden.= "peterselie ";
}
if(isset($_POST["oregano"])){
    $kruiden.= "oregano ";
}
if(isset($_POST["chili"])){
    $kruiden.= "chili ";
}
if(isset($_POST["peper"])){
    $kruiden.= "peper ";
}


$db_manager->create($bodem,$saus,$pizzatoppings,$kruiden);



?>