<?php

require '../classes/CountryRepository.php';

header('Access-Control-Allow-Origin: http://localhost:4200');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');

if(isset($_POST['name']) && is_string($_POST['name']) &&
    isset($_POST['code']) && is_string($_POST['code'])  ){
    CountryRepository::addCountry($_POST['name'], $_POST['code']);
    echo json_encode(true);
}

?>