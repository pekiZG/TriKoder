<?php
include_once("Product.php");
include_once("Model/Car.php");
include_once("Model/Fuel.php");
include_once("Model/Oil.php");

class Model {
        private $mysqli;
        function __construct() {
            $this->mysqli = new mysqli("localhost", "root", "root", "trikoder");
            if(mysqli_connect_errno()) {
                echo("Failed to connect, the error message is: " . mysqli_connect_error());
                exit();
            }
        }

        public function getProductList() {
            
        }
        
        public function getArmy() {
            
        }
        
        // Car
        public function getCarList()
	{
            $sqlQuery = "SELECT
                            *
                        FROM 
                            car
                        ORDER BY price DESC";
            $result = $this->mysqli->query($sqlQuery);
            $returnArray = array();
            while($data = $result->fetch_object()) {
                array_push($returnArray, new Car($data->id, $data->name, $data->price, NULL, NULL));
            }
            return $returnArray;
	}
        
        public function getCar($carId)
	{
            $sqlQuery = "SELECT fuel.id, fuel.name, fuel.price
                        FROM  `fuel` 
                        INNER JOIN  `car_fuel` ON fuel.id = car_fuel.fuel_id
                        WHERE car_fuel.car_id = $carId";
            $result = $this->mysqli->query($sqlQuery);
            $fuelsArray = array();
            while($data = $result->fetch_object()) {
                array_push($fuelsArray, new Fuel($data->id, $data->name, $data->price));
            }
            
            $sqlQuery = "SELECT oil.id, oil.name, oil.price
                        FROM  `oil` 
                        INNER JOIN  `car_oil` ON oil.id = car_oil.oil_id
                        WHERE car_oil.car_id = $carId";
            $result = $this->mysqli->query($sqlQuery);
            $oilsArray = array();
            while($data = $result->fetch_object()) {
                array_push($oilsArray, new Oil($data->id, $data->name, $data->price));
            }
            
            $sqlQuery = "SELECT * FROM car WHERE id = $carId ORDER BY id ASC";
            $result = $this->mysqli->query($sqlQuery);
            $data = $result->fetch_object();
            return new Car($data->id, $data->name, $data->price, $fuelsArray, $oilsArray);
	}
        
        public function createCar()
	{
            $sqlQuery = "UPDATE car SET name = '$carName', price = $carPrice WHERE id=$carId";
            $statement = $this->mysqli->prepare($sqlQuery);
            if ($statement->execute()){
                return new Car($carId, $carName, $carPrice);
            } else {
                return false;
            }
	}
        
        public function insertCar($carName, $carPrice)
	{
            $sqlQuery = "INSERT INTO car (name, price) VALUES ('$carName', $carPrice)";
            $statement = $this->mysqli->prepare($sqlQuery);
            if ($statement->execute()){
                return new Car($this->mysqli->insert_id, $carName, $carPrice, NULL, NULL);
            } else {
                return false;
            }
	}
        
        public function editCar($carId)
	{    
            $sqlQuery = "SELECT fuel.id, fuel.name, fuel.price
                        FROM  `fuel` 
                        INNER JOIN  `car_fuel` ON fuel.id = car_fuel.fuel_id
                        WHERE car_fuel.car_id = $carId";
            $result = $this->mysqli->query($sqlQuery);
            $fuelsArray = array();
            while($data = $result->fetch_object()) {
                array_push($fuelsArray, new Fuel($data->id, $data->name, $data->price));
            }
            
            $sqlQuery = "SELECT oil.id, oil.name, oil.price
                        FROM  `oil` 
                        INNER JOIN  `car_oil` ON oil.id = car_oil.oil_id
                        WHERE car_oil.car_id = $carId";
            $result = $this->mysqli->query($sqlQuery);
            $oilsArray = array();
            while($data = $result->fetch_object()) {
                array_push($oilsArray, new Oil($data->id, $data->name, $data->price));
            }
            
            $sqlQuery = "SELECT * FROM car WHERE id = $carId ORDER BY id ASC";
            $result = $this->mysqli->query($sqlQuery);
            $data = $result->fetch_object();
            return new Car($data->id, $data->name, $data->price, $fuelsArray, $oilsArray);
	}
        
        public function updateCar($carId, $carName, $carPrice)
	{
            $sqlQuery = "UPDATE car SET name = '$carName', price = $carPrice WHERE id=$carId";
            $statement = $this->mysqli->prepare($sqlQuery);
            if ($statement->execute()){
                return new Fuel($carId, $carName, $carPrice);
            } else {
                return false;
            }
	}
        
        public function deleteCar($carId)
	{
            $sqlQuery = "DELETE FROM car WHERE id=$carId";
            $statement = $this->mysqli->prepare($sqlQuery);
            if ($statement->execute()){
                return new Fuel($carId, NULL, NULL);
            } else {
                return false;
            }
	}
        // Rad nad Gorivom i Uljem dotičnog auta
        public function addFuelToCar($carId, $fuelId)
	{
            $sqlQuery = "INSERT INTO car_fuel (car_id, fuel_id) VALUES ('$carId', $fuelId)";
            $statement = $this->mysqli->prepare($sqlQuery);
            
            if ($statement->execute()){
                return true;
            } else {
                return false;
            }
	}
        
        public function addOilToCar($carId, $oilId)
	{
            $sqlQuery = "INSERT INTO car_oil (car_id, oil_id) VALUES ('$carId', $oilId)";
            $statement = $this->mysqli->prepare($sqlQuery);
            
            if ($statement->execute()){
                return true;
            } else {
                return false;
            }
	}
        
        public function removeFuelFromCar($carId, $fuelId)
	{
            $sqlQuery = "DELETE FROM car_fuel WHERE car_id=$carId AND fuel_id=$fuelId";
            $statement = $this->mysqli->prepare($sqlQuery);
            if ($statement->execute()){
                return true;
            } else {
                return false;
            }
	}
        
        public function RemoveOilFromCar($carId, $oilId)
	{
            $sqlQuery = "DELETE FROM car_oil WHERE car_id=$carId AND oil_id=$oilId";
            $statement = $this->mysqli->prepare($sqlQuery);
            if ($statement->execute()){
                return true;
            } else {
                return false;
            }
	}
        
        
        // Oil
        public function getOilList()
	{
            $sqlQuery = "SELECT
                            *
                        FROM 
                            oil
                        ORDER BY price DESC";
            $result = $this->mysqli->query($sqlQuery);
            $returnArray = array();
            while($data = $result->fetch_object()) {
                array_push($returnArray, new Fuel($data->id, $data->name, $data->price));
            }
            return $returnArray;
	}
        
        public function getOil($oilId)
	{
            $sqlQuery = "SELECT * FROM oil WHERE id = $oilId ORDER BY id ASC";
            $result = $this->mysqli->query($sqlQuery);
            $data = $result->fetch_object();
            return new Oil($data->id, $data->name, $data->price);
	}
        
        // Ova logika mi ne treba... lazy programmer is lazy
        public function createOil()
	{
            $sqlQuery = "UPDATE oil SET name = '$oilName', price = $oilPrice WHERE id=$oilId";
            $statement = $this->mysqli->prepare($sqlQuery);
            if ($statement->execute()){
                return new Oil($fuelId, $fuelName, $fuelPrice);
            } else {
                return false;
            }
	}
        
        public function insertOil($oilName, $oilPrice)
	{
            $sqlQuery = "INSERT INTO oil (name, price) VALUES ('$oilName', $oilPrice)";
            $statement = $this->mysqli->prepare($sqlQuery);
            if ($statement->execute()){
                return new Oil($this->mysqli->insert_id, $oilName, $oilPrice);
            } else {
                return false;
            }
	}
        
        public function editOil($oilId)
	{
            $sqlQuery = "SELECT * FROM oil WHERE id = $oilId ORDER BY id ASC";
            $result = $this->mysqli->query($sqlQuery);
            $data = $result->fetch_object();
            return new Oil($data->id, $data->name, $data->price);
	}
        
        public function updateOil($oilId, $oilName, $oilPrice)
	{
            $sqlQuery = "UPDATE oil SET name = '$oilName', price = $oilPrice WHERE id=$oilId";
            $statement = $this->mysqli->prepare($sqlQuery);
            if ($statement->execute()){
                return new Fuel($oilId, $oilName, $oilPrice);
            } else {
                return false;
            }
	}
        
        public function deleteOil($oilId)
	{
            $sqlQuery = "DELETE FROM oil WHERE id=$oilId";
            $statement = $this->mysqli->prepare($sqlQuery);
            if ($statement->execute()){
                return new Fuel($oilId, NULL, NULL);
            } else {
                return false;
            }
	}
        
        // Fuel
        public function getFuelList()
	{
            $sqlQuery = "SELECT
                            *
                        FROM 
                            fuel
                        ORDER BY price DESC";
            $result = $this->mysqli->query($sqlQuery);
            $returnArray = array();
            while($data = $result->fetch_object()) {
                array_push($returnArray, new Fuel($data->id, $data->name, $data->price));
            }
            return $returnArray;
	}
        
        public function getFuel($fuelId)
	{
            $sqlQuery = "SELECT * FROM fuel WHERE id = $fuelId ORDER BY id ASC";
            $result = $this->mysqli->query($sqlQuery);
            $data = $result->fetch_object();
            return new Fuel($data->id, $data->name, $data->price);
	}
        
        public function createFuel()
	{
            $sqlQuery = "UPDATE fuel SET name = '$fuelName', price = $fuelPrice WHERE id=$fuelId";
            $statement = $this->mysqli->prepare($sqlQuery);
            if ($statement->execute()){
                return new Fuel($fuelId, $fuelName, $fuelPrice);
            } else {
                return false;
            }
	}
        
        public function insertFuel($fuelName, $fuelPrice)
	{
            $sqlQuery = "INSERT INTO fuel (name, price) VALUES ('$fuelName', $fuelPrice)";
            $statement = $this->mysqli->prepare($sqlQuery);
            if ($statement->execute()){
                return new Fuel($this->mysqli->insert_id, $fuelName, $fuelPrice);
            } else {
                return false;
            }
	}
        
        public function editFuel($fuelId)
	{
            $sqlQuery = "SELECT * FROM fuel WHERE id = $fuelId ORDER BY id ASC";
            $result = $this->mysqli->query($sqlQuery);
            $data = $result->fetch_object();
            return new Fuel($data->id, $data->name, $data->price);
	}
        
        public function updateFuel($fuelId, $fuelName, $fuelPrice)
	{
            $sqlQuery = "UPDATE fuel SET name = '$fuelName', price = $fuelPrice WHERE id=$fuelId";
            $statement = $this->mysqli->prepare($sqlQuery);
            if ($statement->execute()){
                return new Fuel($fuelId, $fuelName, $fuelPrice);
            } else {
                return false;
            }
	}
        
        public function deleteFuel($fuelId)
	{
            $sqlQuery = "DELETE FROM fuel WHERE id=$fuelId";
            $statement = $this->mysqli->prepare($sqlQuery);
            if ($statement->execute()){
                return new Fuel($fuelId, NULL, NULL);
            } else {
                return false;
            }
	}

}
?>
