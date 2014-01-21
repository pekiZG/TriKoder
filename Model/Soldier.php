<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Soldier
 *
 * @author Petar
 */
class Soldier {
    private $HP;
    
    function __construct($HP) {
        $this->HP = $HP;
    }
    
    public function getHP() {
        return $this->HP;
    }

    public function setHP($HP) {
        $this->HP = $HP;
    }
}
