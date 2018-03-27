<?php 

namespace Design;

class LogToCsvAdapter extends ErrorObject {
	private $errorNumber, $errorText;

	public function __construct($class)
	{
		parent::__construct($class);

		$error = explode(':', $this->getError());

		if (is_array($error)) {
			$this->errorNumber = $error[0];
			$this->errorText = $error[1];
		}
	}

	public function getErrorNumber()
	{
		return $this->errorNumber;
	}

	public function getErrorText()
	{
		return $this->errorText;
	}

	public function writeError()
	{
		$content = '你滴错误代码为：' . $this->errorNumber . '；你滴错误名为：' . $this->errorText . "\n";
		file_put_contents('errorlog.txt', $content, FILE_APPEND);
	}

}