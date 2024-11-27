<?php

require_once("Item.php");

class Magia extends Item{
    public function __construct(string $name){
        parent::__construct($name, 2, "Magia");
    }
}
