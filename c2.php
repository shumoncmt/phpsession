<?php
$person = [
    'name' => 'shakil mia',
    'age' => 34,
    'hobbies' => ['Reading', 'swimming'],
];

$json = json_encode( $person, JSON_PRETTY_PRINT);
file_put_contents("person.json", $json);

