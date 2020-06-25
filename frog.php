<?php
include_once ('animal.php');
	class Frog extends Animal{
		function __construct($name){
			$this->name = $name;
			$this->legs = 4;
			$this->cold_blooded = true;
		}
		function jump(){
			echo "hop hop <br>";
		}
	}