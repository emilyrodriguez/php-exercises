<?php
class Rectangle {
	private $width;
	private $height;

	public function __construct($width, $height) {
		$this->width = $width;
		$this->height = $height;
	}
	public function area() {
		return $this->width * $this->height;
	}	
	public function perimeter() {
		return $this->height * 4;
	}
}