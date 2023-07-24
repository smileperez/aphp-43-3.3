<?php

namespace Classes;

use Interfaces\Iterator as Iterator;
use Classes\Person as Person;

class PeopleList implements Iterator {
    public $listpeople = [];
    private $count = 0;
    private $index = 0;
    public function current()
    {
        return $this->listpeople[$this->index];
    }
    public function next()
    {
        $this->index++;
    }
    public function rewind()
    {
        $this->index = 0;
    }
    public function key()
    {
        return $this->index;
    }
    public function valid()
    {
        return isset($this->listpeople[$this->key()]);
    }
    
    public function reverse()
    {
        $this->listpeople = array_reverse($this->listpeople);
        $this->rewind();
    }
    public function addPeople(string $name, string $surname, int $age, float $GPA,)
    {
        array_push($this->listpeople, new Person($name, $surname, $age, $GPA));
        $this->count++;
        echo 'Персона '. $this->count . ' добавлена в лист'.PHP_EOL;
    }
    
    public function removePeople($listpeople) 
    {
        $index = array_search($listpeople, $this->listpeople);
        if(isset($this->listpeople[$index])) {
            unset($this->listpeople[$index]);
            $this->count--;
        }
        echo 'Персона '. $listpeople . ' удалена'.PHP_EOL;
    }
    public function totalCount()
    {
        return $this->count;
    }
}
?>