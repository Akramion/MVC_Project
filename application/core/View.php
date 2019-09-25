<?php 
namespace application\core;
/**
 * 
 */
class View
{
	public $path;
	public $layout = 'default';
	public $route;

	function __construct($route)
	{
		$this->route = $route;
		$this->path = $route['controller'] . '/' . $route['action'];
		echo $this->path;
	}

	public function render($title, $vars = [])
	{
		ob_start();
		require 'application/views/layouts/' . $this->path . '.php';
		$content = ob_get_clean();

		require 'application/views/layouts/' . $this->layout . '.php';
	}

}

 ?>