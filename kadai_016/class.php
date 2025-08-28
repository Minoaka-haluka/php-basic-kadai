<?php

class Food
{
    public $name;
    public $price;


    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }


    public function show_price()
    {
        echo "価格：{$this->price}円<br>";
    }
}


class Animal
{
    public $name;
    public $height;
    public $weight;

    public function __construct($name, $height, $weight)
    {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }


    public function show_weight()
    {
        echo "体重：{$this->weight}cm<br>";
    }
}

$food = new Food("りんご", 150);
print_r($food);
echo "<br>";
$food->show_price();

echo "<br><br>";

$animal = new Animal("キリン", 600, 900);
print_r($animal);
echo "<br>";
$animal->show_weight();
?>