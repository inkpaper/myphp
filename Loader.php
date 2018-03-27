<?php 

class Loader {

	//路径映射
	public static $vendorMap = [
		'Design' => __DIR__ . DIRECTORY_SEPARATOR . 'design'
	];

	//自动加载
	public static function __autoload($class)
	{
		$file = self::findFile($class);
		if (file_exists($file)) {
			self::requireFile($file);
		}
	}

	//解析文件路径
	private static function findFile($class)
	{
		$vendor = substr($class, 0, strpos($class, '\\'));
		$vendorDir = self::$vendorMap[$vendor];
		$filepath = substr($class, strlen($vendor)) . '.php';
		return strtr($vendorDir . $filepath, '\\', DIRECTORY_SEPARATOR);
	}

	//包含文件
	private static function requireFile($file)
	{
		if (is_file($file)) {
			require_once($file);
		}
	}
}