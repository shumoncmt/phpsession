<?php
$person =[
    'name' => 'shakil mia',
    'age' => 25,
    'hobbies' =>['Tennis', 'writing'],
];

echo serialize($person);

echo "\n";
$newArray = unserialize('a:3:{s:4:"name";s:10:"shakil mia";s:3:"age";i:25;s:7:"hobbies";a:2:{i:0;s:6:"Tennis";i:1;s:7:"writing";}}');
echo $newArray[ 'name'];
