<?php

namespace Classes;

class Person
{
    private $name;
    private $surname;
    private $age;
    private $GPA;

    public function __construct(string $name, string $surname, int $age, float $GPA)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->GPA = $GPA;
    }

    public function getFullname(): void {
        echo $this->name . ' ' . $this->surname;
    }
    
    public function __set($property, $value) {
        $this->$property = $value;
    }

    public function __get($property) {
        return $this->$property.PHP_EOL;
    }

    public function __sleep(): array {
        echo "Запущена сериализация".PHP_EOL;
        return array('name', 'surname', 'age', 'GPA');
    }

    public function  __wakeup() {
        echo "Запущена десериализация".PHP_EOL;
    }

    // public function __toString(): string {

    // }
}
?>