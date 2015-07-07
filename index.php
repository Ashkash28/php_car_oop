<?php

class Car
{
	public $price;
	public $speed;
	public $fuel;
	public $mileage;
	public $tax;

	public function __construct($price_p, $speed_p, $fuel_p, $mileage_p)
	{
		$this->price = $price_p;
		$this->speed = $speed_p;
		$this->fuel = $fuel_p;
		$this->mileage = $mileage_p;

		if($this->price > 10000)
		{
			$this->tax = .15;
		}
		else
		{
			$this->tax= .12;
		}
		$this->Display_all($price_p, $speed_p, $fuel_p, $mileage_p);
	}

	private function Display_all()
	{
		echo '-----------------------------------';
		echo '<br>';
		echo "Price: ". $this->price;
		echo '<br>';
		echo "Speed: ". $this->speed;
		echo '<br>';
		echo "Fuel: ". $this->fuel;
		echo '<br>';
		echo "Mileage: ". $this->mileage;
		echo '<br>';
		echo "Tax: ". $this->tax;
		echo '<br>';
		echo '----------------------------------';
	}
}

$car1 = new Car(2000, '35mph', 'Full', '15mpg');

$car2 = new Car(2000, '5mph', 'Not Full', '105mpg');

$car3 = new Car(2000, '15mph', 'Kind of Full', '95mpg');

$car4 = new Car(2000000, '35mph', 'Empty', '15mpg');

$car5 = new Car(2000, '45mph', 'Empty', '25mpg');

?>