<?php

class App
{

	protected $controller = 'Home';
	protected $method = 'index';
	protected $params = [];


	function __construct()
	{

		$url = $this->pharseURL();

		// controller
		if (file_exists('../app/controllers/' . $url[0] . '.php')) {

			$this->controller = $url[0];
			unset($url[0]);
		}

		// akses ke controller
		require_once '../app/controllers/' . $this->controller . '.php';
		$this->controller = new $this->controller;

		// method
		if (isset($url[1]) && method_exists($this->controller, $url[1])) {

			$this->method = $url[1];
			unset($url[1]);
		}


		// ambil params
		if (!empty($url)) {

			$this->params = array_values($url);
		}

		// jalankan controller, method, dan masukkan params
		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	function pharseURL()
	{

		if (isset($_GET['url'])) {

			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
		return ['home'];
	}
}
