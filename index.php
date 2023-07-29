<?php
declare(strict_types=1);

require_once __DIR__ . '.\autoload.php';
Autoload::initial();

use Classes\Person as Person;
use Classes\PeopleList as PeopleList;

// Часть 1 //

$user1_before = new Person('Andrey', 'Efimenko', 29, 4.5);

// При выводе магическипроисходит __toString
echo $user1_before;

$user1_data = serialize($user1_before);

echo $user1_data . PHP_EOL;

// Изменили оценку в сериализации данных
$user1_data_mod = str_replace('4.5', '5', $user1_data);

echo $user1_data_mod . PHP_EOL;

$user1_after = unserialize($user1_data_mod);

// При выводе магическипроисходит __toString
echo $user1_after;

// Часть 2 //

$persons = new PeopleList();
$persons->addPeople('Andrey', 'Efimenko', 29, 4.5);
$persons->addPeople('Ivan', 'Vinogradov', 29, 3);
$persons->addPeople('Liubov', 'Belova', 31, 5);
$persons->addPeople('Berbek', 'Atomanov', 54, 2.6);


echo '/////////////////////////////'.PHP_EOL;

// Проверяем всех пользователей
echo 'Проверяем всех созданных пользователей:'.PHP_EOL;
foreach ($persons as $person => $data) {
    echo $person.' - '.$data;
}


echo '/////////////////////////////'.PHP_EOL;

// перевернем список
echo 'Переворачиваем список пользователей:'.PHP_EOL;
$persons->reverse();
echo 'Проверяем всех перевернутых пользователей:'.PHP_EOL;
foreach ($persons as $person => $data) {
    echo $person.' - '.$data;
}


echo '/////////////////////////////'.PHP_EOL;

// удаляем пользователя
echo 'Удаляем пользователя:'.PHP_EOL;
$persons->removePeople(2);
echo 'Проверяем пользователей после удаления:'.PHP_EOL;
foreach ($persons as $person => $data) {
    echo $person.' - '.$data;
}