<?php
include_once ('animal.php');
	class Ape extends Animal{
		function __construct($name){
			$this->name = $name;
			$this->legs = 4;
			$this->cold_blooded = false;
		}
		function yell(){
			echo "Auooo <br>";
		}
	}