<?php

class Input
{

	/**
	 * Holds all the get/post values
	 * from the superglobals.
	 *
	 * @var array
	 */
	private $inputs = [
		"get" => [],
		"post" => [],
	];

	/**
	 * Creates a new Input object,
	 * holding the values from
	 * the superglobals.
	 *
	 * @return Input
	 */
	public static function createFromGlobals()
	{
		return new self(["get" => $_GET, "post" => $_POST]);
	}

	/**
	 * Constructor.
	 *
	 * @param array $inputs
	 */
	public function __construct($inputs = [])
	{
		$this->replace($inputs);
	}

	/**
	 * Replaces the current $inputs array.
	 *
	 * @param array $inputs
	 * @return Input
	 */
	public function replace($inputs = [])
	{
		foreach ($this->inputs as $key => $value) {
			if (isset($inputs[$key])) {
				$this->inputs[$key] = $inputs[$key];
			}
		}

		return $this;
	}

	/**
	 * Returns a specific key from the GET values array.
	 *
	 * @param string $key
	 * @return mixed
	 */
	public function get($key)
	{
		return $this->fetch("get", $key);
	}

	/**
	 * Returns a specific key from the POST values array.
	 *
	 * @param string $key
	 * @return mixed 
	 */
	public function post($key)
	{
		return $this->fetch("post", $key);
	}

	/**
	 * Fetches a value from the inputs array.
	 *
	 * @param string $input The type of the input - GET or POST.
	 * @param string $key
	 * @return mixed
	 */
	protected function fetch($input, $key)
	{
		$result = null;

		if (isset($this->inputs[$input][$key])) {
			$result = $this->inputs[$input][$key];
		}

		return $result;
	}

}
