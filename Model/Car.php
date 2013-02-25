<?php
include_once 'Product.php';
include_once 'Fuel.php';
include_once 'Oil.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Car
 *
 * @author Petar
 */
class Car extends Product {
    //put your code here
    private $id;
    private $name;
    private $price;
    private $fuels = array();
    private $oils = array();
    
    function __construct($id, $name, $price, $fuels, $oils) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->fuels = $fuels;
        $this->oils = $oils;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getFuels() {
        return $this->fuels;
    }

    public function setFuels($fuels) {
        $this->fuels = $fuels;
    }
    
    public function addFuel(Fuel $fuel) {
        array_push($this->fuels, $fuel);
    }
    
    public function removeFuel(Fuel $fuel) {
        unset($this->fuels[$fuel]);
    }

    public function getOils() {
        return $this->oils;
    }

    public function setOils($oils) {
        $this->oils = $oils;
    }
    
    public function addOil(Oil $oil) {
        array_push($this->oils, $oil);
    }
    
    public function removeOil(Oil $oil) {
        unset($this->oils[$oil]);
    }

}

?>
