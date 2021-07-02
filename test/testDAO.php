<?php

require_once "../model/DAO.php";

$dao = new DAO();

// test
echo '<pre>';
print_r($dao->selectAllCars());
echo '</pre>';

//$dao->insertCar("Moskvic", "dz aba");

?>