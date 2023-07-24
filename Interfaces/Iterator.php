<?php

namespace Interfaces;

// Без этого пустого интефрейса не работало
interface Traversable {
}

interface Iterator extends Traversable {
    public function current();
    public function key();
    public function next(); 
    public function rewind();
    public function valid();
}

?>