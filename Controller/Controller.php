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
               $simulation = $this->model->getArmy();
               include 'View/Simulate/Simulate.php';
          }
     }
}
?>