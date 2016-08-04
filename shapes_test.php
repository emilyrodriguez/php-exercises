<?php
require_once("rectangle.php");
require_once("square.php");

$rectangle1 = new Rectangle(6,12);
$rectangle2 = new Rectangle(12,24);
$rectangle3 = new Rectangle(18,36);

$square1 = new Square(6,6);
$square2 = new Square(12,12);
$square3 = new Square(18,18);

echo "Area\n";
echo $rectangle1->area() . PHP_EOL;
echo $rectangle2->area() . PHP_EOL;
echo $rectangle3->area() . PHP_EOL;
echo "Perimeter\n";
echo $square1->perimeter() . PHP_EOL;
echo $square2->perimeter() . PHP_EOL;
echo $square3->perimeter() . PHP_EOL;