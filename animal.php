<?php
include ("ape.php");
include ("frog.php");

	class Animal{
		public $name;
		function __construct($name) {
			$this->name = $name;
			$this->legs = 2;
			$this->cold_blooded = false;
		}

		function get_name() {
			return $this->name;
		}

		function get_legs(){
			return $this->legs;
		}

		function get_cold_blooded(){
			return boolval($this->cold_blooded)? "true":"false";
		}
	}