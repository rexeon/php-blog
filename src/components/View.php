<?php 

namespace components;

class View {
	private $template;
	private $params = [];

	public function __construct($template) {
		$this->template = $template;
	}

	public function render() {
		if (!empty($this->params)) {
			extract($this->params);
		}
		require_once($this->template);
	}

	public function __set($name, $value) {
		$this->params[$name] = $value;
	}
}