<?php
$jsonData = file_get_contents("person.json");
// $person =json_decode($jsonData);
// var_dump($person);
// print_r($person);
// echo $person->name;


$person = json_decode($jsonData, true);
echo $person['age'];
print_r($person);