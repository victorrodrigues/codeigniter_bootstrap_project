<?php
class Layout_Hook {
	public function __construct()
	{
		$this->CI =& get_instance();
	}

	public function render()
	{
		$output = TRUE;
		$data = array();
		$view_path = "";

		$namespace = $this->CI->router->fetch_directory();
		$controller = $this->CI->router->fetch_class();
		$action = $this->CI->router->fetch_method();

		$klass = new ReflectionClass($controller);

		if ($klass->hasProperty('layout')) {
			if ( ! $klass->getStaticPropertyValue('layout')) {
				$output = FALSE;
			}
		}

		if ($output) {
			$properties = $klass->getMethod($action)->getStaticVariables();

			while(list($key, $value) = each($properties))
			{
				$data[$key] = $value;
			}

			if ($namespace)
				$view_path .= $namespace . "/";
			if ($controller)
				$view_path .= $controller . "/";
			if ($action)
				$view_path .= $action . ".php";

			$this->CI->layout->view($view_path, $data);

		}
	}
}
