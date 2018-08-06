<?php

require '../classes/CountryRepository.php';

header('Access-Control-Allow-Origin: http://localhost:4200');
header('Content-type: application/json');

$countries = CountryRepository::getCountries();

echo json_encode($countries);

?>