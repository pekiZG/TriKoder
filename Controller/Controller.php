<?php

include_once 'Model/Model.php';

class Controller {

    public $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function invoke() {
        if (isset($_GET['army1']) && isset($_GET['army2'])) {
            $player1dice = new Dice();
            $player1dice->setNumberOfSides(6);
            $player1army = array();
            for ($index = 0; $index < $_GET['army1']; $index++) {
                array_push($player1army, new Soldier(18));
            }

            $player2dice = new Dice();
            $player2dice->setNumberOfSides(6);
            $player2army = array();
            for ($index = 0; $index < $_GET['army2']; $index++) {
                array_push($player2army, new Soldier(18));
            }

            //TODO: Make Battlefield class that accepts two solders and runs simulation/fight
            while (count($player1army) > 0 && count($player2army) > 0) {
                $player1solder = array_pop($player1army);
                $player2solder = array_pop($player2army);

                //TODO: Add iniciative attribute to soldier
                while ($player1solder->getHP() > 0 && $player2solder->getHP() > 0) {
                    $player1solder->setHP($player1solder->getHP() - $player2dice->roll());
                    $player2solder->setHP($player2solder->getHP() - $player1dice->roll());

                    include 'View/Simulate/Simulate.php';
                }
                
                // TODO: Whose solder won??? Make scoreboard??? It can be a draw :/
                if ($player1solder->getHP() <= 0) {
                    print_r('player2solder won this round');
                } else {
                    print_r('player1solder won this round');
                }
            }
        }
    }

}

?>