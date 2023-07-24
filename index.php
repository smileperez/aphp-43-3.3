<?php
declare(strict_types=1);

require_once __DIR__ . '.\autoload.php';
Autoload::initial();

use Classes\Person as Person;

$user1_before = new Person('Andrey', 'Efimenko', 29, 4.5);

echo $user1_before->name;
echo $user1_before->surname;
echo $user1_before->age;
echo $user1_before->GPA;

$user1_data = serialize($user1_before);

echo $user1_data . PHP_EOL;

$user1_data_mod = str_replace('4.5', '5', $user1_data);

echo $user1_data_mod . PHP_EOL;

$user1_after = unserialize($user1_data_mod);

echo $user1_after->name;
echo $user1_after->surname;
echo $user1_after->age;
echo $user1_after->GPA;


// echo $user->doAuth('mobile', 'test');
// echo $user->doAuth('hacker', 'password');

