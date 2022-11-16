<?php

    class Automobile
    {
        private $vehicleMake;
        private $vehicleModel;
        private function __construct($make, $model) 
        {

            $this->vehicleMake = $make;
            $this->vehicleModel = $model;
        
        }
        public function getMakeAndModel()
        {
            
            return $this->vehicleMake . ' ' . $this->vehicleModel;

        }

        public static function create($make, $model)
        {

            return new Automobile($make, $model);
    
        }

    }

    $bmw = new Automobile->create('BMW', 'M5');
