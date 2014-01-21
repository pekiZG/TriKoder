<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dice
 *
 * @author Petar
 */
class Dice {
    private $numberOfSides;
    
    public function getNumberOfSides() {
        return $this->numberOfSides;
    }

    public function setNumberOfSides($numberOfSides) {
        $this->numberOfSides = $numberOfSides;
    }

    public function roll() {
        return rand(1, $this->numberOfSides);
    }
}
