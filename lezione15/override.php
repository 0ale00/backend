<?php
// dichiarazione della classe Person
class Person {
	public $name;
	// costruttore
	function __construct($name) {
		echo "Chiamata costruttore della Superclasse"."<br>";
		// inizializzazione della proprietà $name
		$this->name = $name;
	}
	// metodi
	function viewHello() {
		echo "Hello ".$this->name."<br>";
	}
}
// definizione della sottoclasse Employees
class Employees extends Person {
	public $profile;
	// costruttore della sottoclasse
	function __construct($name, $profile) {
		parent::__construct($name); // chiamo il costruttore di Person
		$this->profile = $profile;  // inizializzo $profile
	}
	// metodi
	function viewHello() {
		parent::viewHello();
		echo "Profile: ".$this->profile."<br>";
	}
}
$customer = new Person("Giuseppe Rossi");
$customer->viewHello();
$employee = new Employees("Mario Rossi", "Admin");
$employee->viewHello();
?>