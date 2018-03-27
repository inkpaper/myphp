<?php 

namespace Design;

class LogToConsole extends ErrorObject {
	private $errorObj;

	public function __construct($errorObj)
	{
		$this->errorObj = $errorObj;
	}

	public function writeError()
	{
		fwrite(STDERR, $this->errorObj->getError());
	}
}