<?php
require_once("rectangle.php");

class Square extends Rectangle {
	public function perimeter() {
		return ($this->width + $this->height) * 2;
	}
	public function __construct($height) {
		parent::__construct($height, $height);

	}
}