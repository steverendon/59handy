<?php

class Zipcode{
    public $id;
    public $zip;

    public function __construct($zip)
    {
        $this->zip = $zip;
    }
}