<?php

namespace Classes;

use Classes\Person as Person;

class PeopleList implements \Iterator {
    public $listpeople = [];
    private $count = 0;
    private $index = 0;
    public function current():mixed
    {
        return $this->listpeople[$this->index];
    }
    public function next():void
    {
        $this->index++;
    }
    public function rewind():void
    {
        $this->index = 0;
    }
    public function key():mixed
    {
        return $this->index;
    }
    public function valid():bool
    {
        return isset($this->listpeople[$this->key()]);
    }
    
    public function reverse()
    {
        try {
            $this->listpeople = array_reverse($this->listpeople);
            $this->rewind();
            echo 'Список перевернут.'.PHP_EOL;
        } catch (\Exception $e) {
            print "Error!: " . $e->getMessage().PHP_EOL;
            die();
        }
    }
    public function addPeople(string $name, string $surname, int $age, float $GPA,)
    {
        try {
            array_push($this->listpeople, new Person($name, $surname, $age, $GPA));
            $this->count++;
            echo 'Персона '. $this->count . ' добавлена в лист.'.PHP_EOL;
        } catch (\Exception $e) {
            print "Error!: " . $e->getMessage().PHP_EOL;
            die();
        }
    }
    
    public function removePeople($id) 
    {
        try {
            foreach ($this->listpeople as $key => $value) {
                if ($key == $id) {
                    unset($this->listpeople[$key]);
                }
            }
            // Восстанавливаем все инексы массива, из-за удаления значения массива
            $this->listpeople = array_values($this->listpeople);
            echo 'Персона '. $id . ' удалена.'.PHP_EOL;
        } catch (\Exception $e) {
            print "Error!: " . $e->getMessage().PHP_EOL;
            die();
        }
    }
}
?>