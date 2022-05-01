<?php

class Basket {

        private $cheese;
        private $bread;
        private $milk;
        private $eggs;
        private $potatoes;
        public $sumBasket;

        public function __construct() {
            $this->cheese = $this->cheese + 1;
            $this->bread = $this->bread + 1;
            $this->milk = $this->milk + 1;
            $this->eggs = $this->eggs + 1;
            $this->potatoes = $this->potatoes + 1;
        }

        public function __destruct() {
            $this->cheese = 0;
            $this->bread = 0;
            $this->milk = 0;
            $this->eggs = 0;
            $this->potatoes = 0;
        }

        public function getSumBasket() {     
            return  $this->cheese + $this->bread + $this->milk + $this->eggs + $this->potatoes;
        }
}

$obj = new Basket;

echo $obj->getSumBasket();
