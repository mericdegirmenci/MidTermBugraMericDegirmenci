<?php
require "Automobile.php";
?>

<?php 

$licencePlate = $_POST["licencePlate"];
$brand = $_POST["brand"];
$model = $_POST["model"];
$modelYear = $_POST["modelYear"];
$color = $_POST["color"];

$car = new Automobile(123456,$licencePlate,$brand,$model,$modelYear,$color);

echo $car->__toString();
?>