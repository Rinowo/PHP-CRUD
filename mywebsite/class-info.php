<?php
 class Person {
     //declare properties
     public $id = 1;
     public $name = "Rinowo";
     public $email = "Rinowo@Gmail.com";

     public function getInfo() {
         return ($this->id) . ($this->name) . ($this->email);
     }
 }
