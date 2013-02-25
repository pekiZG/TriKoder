<?php
include_once("Model/Model.php");

class Controller {
     public $model;

     public function __construct()
     {
          $this->model = new Model();
     } 

     public function invoke()
     {
          if (!isset($_GET['type']))
          {
               // no special type is requested, show a list of all types
               $cars = $this->model->getCarList();
               include 'View/Car/CarList.php';
               
               $fuels = $this->model->getFuelList();
               include 'View/Fuel/FuelList.php';
               
               $oils = $this->model->getOilList();
               include 'View/Oil/OilList.php';
          }
          else if (isset($_GET['type']) && $_GET['type'] == 'fuel')
          {     
               // action on fuel
               switch ($_GET['action']) {
                   case 'create':
                       //$fuel = $this->model->create($_GET['type']);
                       include 'View/Fuel/CreateFuel.php';
                       break;
                   case 'insert':
                       $fuel = $this->model->insertFuel($_GET['fuelName'], $_GET['fuelPrice']);
                       include 'View/Fuel/InsertFuel.php';
                       break;
                   case 'edit':
                       $fuel = $this->model->editFuel($_GET['fuelId']);
                       include 'View/Fuel/EditFuel.php';
                       break;
                   case 'update':
                       $fuel = $this->model->updateFuel($_GET['fuelId'], $_GET['fuelName'], $_GET['fuelPrice']);
                       include 'View/Fuel/UpdateFuel.php';
                       break;
                   case 'delete':
                       $fuel = $this->model->deleteFuel($_GET['fuelId']);
                       include 'View/Fuel/DeleteFuel.php';
                       break;
                   default:
                       $fuel = $this->model->getFuel($_GET['fuelId']);
                       include 'View/Fuel/ViewFuel.php';
                       break;
               }
          }
          else if (isset($_GET['type']) && $_GET['type'] == 'oil')
          {     
               // action on oil
               switch ($_GET['action']) {
                   case 'create':
                       include 'View/Oil/CreateOil.php';
                       break;
                   case 'insert':
                       $oil = $this->model->insertOil($_GET['oilName'], $_GET['oilPrice']);
                       include 'View/Oil/InsertOil.php';
                       break;
                   case 'edit':
                       $oil = $this->model->editOil($_GET['oilId']);
                       include 'View/Oil/EditOil.php';
                       break;
                   case 'update':
                       $oil = $this->model->updateOil($_GET['oilId'], $_GET['oilName'], $_GET['oilPrice']);
                       include 'View/Oil/UpdateOil.php';
                       break;
                   case 'delete':
                       $oil = $this->model->deleteOil($_GET['oilId']);
                       include 'View/Oil/DeleteOil.php';
                       break;
                   default:
                       $oil = $this->model->getOil($_GET['oilId']);
                       include 'View/Oil/ViewOil.php';
                       break;
               }
          }
          else if (isset($_GET['type']) && $_GET['type'] == 'car')
          {     
               // actions on car
               switch ($_GET['action']) {
                   case 'create':
                       include 'View/Car/CreateCar.php';
                       break;
                   case 'insert':
                       $car = $this->model->insertCar($_GET['carName'], $_GET['carPrice']);
                       include 'View/Car/InsertCar.php';
                       break;
                   case 'edit':
                       $car = $this->model->editCar($_GET['carId']);
                       include 'View/Car/EditCar.php';
                       break;
                   case 'update':
                       $car = $this->model->updateCar($_GET['carId'], $_GET['carName'], $_GET['carPrice']);
                       include 'View/Car/UpdateCar.php';
                       break;
                   case 'delete':
                       $car = $this->model->deleteCar($_GET['carId']);
                       include 'View/Car/DeleteCar.php';
                       break;
                   case 'addFuel':
                       $car = $this->model->getCar($_GET['carId']);
                       include 'View/Car/ViewCar.php';
                       $fuels = $this->model->getFuelList();
                       include 'View/Car/CarFuelList.php';
                       break;
                   case 'addOil':
                       $car = $this->model->getCar($_GET['carId']);
                       include 'View/Car/ViewCar.php';
                       $oils = $this->model->getOilList();
                       include 'View/Car/CarOilList.php';
                       break;
                   case 'insertFuel':
                       $car = $this->model->addFuelToCar($_GET['carId'], $_GET['fuelId']);
                       include 'View/Car/FuelAddedToCar.php';
                       break;
                   case 'insertOil':
                       $car = $this->model->addOilToCar($_GET['carId'], $_GET['fuelId']);
                       include 'View/Car/OilAddedToCar.php';
                       break;
                   case 'removeFuel':
                       $car = $this->model->removeFuelFromCar($_GET['carId'], $_GET['fuelId']);
                       include 'View/Car/FuelRemovedFromCar.php';
                       break;
                   case 'removeOil':
                       $car = $this->model->removeOilFromCar($_GET['carId'], $_GET['fuelId']);
                       include 'View/Car/OilRemovedFromCar.php';
                       break;
                   case 'read':
                       $car = $this->model->getCar($_GET['carId']);
                       include 'View/Car/ViewCar.php';
                       break;
               }
          }
     }
}
?>