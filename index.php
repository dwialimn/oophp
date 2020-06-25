<?php
require('animal.php');
// shaun
	$sheep = new Animal("shaun");
	echo $sheep->get_name()."<br>"; // "shaun"
	echo $sheep->get_legs()."<br>"; // 2
	echo $sheep->get_cold_blooded()."<br><br>"; // false

// kera sakti
	$sungokong = new Ape("kera sakti");
	$sungokong->yell(); // "Auooo"
	echo $sungokong->get_name()."<br>";
	echo $sungokong->get_legs()."<br>";
	echo $sungokong->get_cold_blooded()."<br><br>";

// buduk
	$kodok = new Frog("buduk");
	$kodok->jump() ; // "hop hop"
	echo $kodok->get_name()."<br>";
	echo $kodok->get_legs()."<br>";
	echo $kodok->get_cold_blooded()."<br><br>";
	
	// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())