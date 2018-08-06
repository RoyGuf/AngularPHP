<?php

class Country{

    public $name='';
    public $code='';
    public $states=array();

    public function __construct($a, $b, $c){
        $this->name = $a;
        $this->code = $b;
        $this->states = $c;
    }
}