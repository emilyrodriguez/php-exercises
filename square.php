<?php
require_once("rectangle.php");

class Square extends Rectangle {
	public function __construct($height) {
		parent::__construct($height, $height);
	}
}