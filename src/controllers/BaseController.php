<?php 

namespace controllers;

use components\View;
use App;

class BaseController {
	public $view;

	public function __construct() {
		$template = ROOT . '/src/views/' .implode('/', App::$route) . '.php';
		$this->view = new View($template);
	}

	public function sendJsonResponse($data) {
		header('Content-Type: application/json');
		echo json_encode($data);
	}
}