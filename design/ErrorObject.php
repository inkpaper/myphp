<?php 

namespace Design;

class ErrorObject {
	private $error;

	public function __construct($error) 
	{
		$this->error = $error;
	}

	public function getError()
	{
		return $this->error;
	}
}