<?php 	
class App {
	public static $config;
	public static $dbh;
	public static $route;

	private static function initDb() {
		try {
			extract(self::$config['db']);
		    self::$dbh = new PDO($dsn, $user, $password);
		} catch (PDOException $e) {
		    echo 'Connection failed: ' . $e->getMessage();
		}
	}

	private static function initRoute() {
		if (empty($_GET['_url'])) $_GET['_url'] = 'explorer/index';
		$params = explode('/', trim($_GET['_url'], '/'));
		$route = self::$config['route'];
		if (array_key_exists($params[0], $route)) {
			self::$route = [];
			self::$route['controller'] = $params[0];
			self::$route['action'] = in_array($params[1], $route[$params[0]])?$params[1]:'index';
		} else {
			self::$route = [
				'controller' => 'explorer',
				'action' => 'index'
			];
		}
	}

	private static function registerAutoloader() {
		spl_autoload_register(function ($class) {
			$paths = explode("\\", $class);
			$file = implode('/', $paths) . ".php";
		    include ROOT . '/src/' . $file;
		});
	}

	private static function handleRequest() {
		$className = "controllers\\" . ucfirst(self::$route['controller']) . "Controller";
		$controller = new $className();
		$action = self::$route['action'].'Action';
		$result = $controller->$action();
		if ($result) { // ajax request
			$controller->sendJsonResponse($result);
		} else {
			$controller->view->render();
		}
	}

	public static function run($config) {
		session_start();
		self::$config = $config;
		self::initDb();
		self::initRoute();
		self::registerAutoloader();
		self::handleRequest();
	}
}

