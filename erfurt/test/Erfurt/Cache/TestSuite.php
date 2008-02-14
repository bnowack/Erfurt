<?php
if (!defined('ERFURT_TEST_CONFIG')) {
	require_once '../../config.php';
}

if (!defined('PHPUnit_MAIN_METHOD')) {
	define('PHPUnit_MAIN_METHOD', 'Erfurt_Cache_TestSuite::main');
}

class Erfurt_Cache_TestSuite {
	
	public static function main() {
		
		echo "<pre>";
		PHPUnit_TextUI_TestRunner::run(self::suite());
		echo "</pre>";
	}
	
	public static function suite() {
		
		$suite = new PHPUnit_Framework_TestSuite();
		
		$suite->addTest(Erfurt_Cache_FrontendTest::suite());
		
		return $suite;
	}
}

if (PHPUnit_MAIN_METHOD == 'Erfurt_Cache_TestSuite::main') {
	Erfurt_Cache_TestSuite::main();
}
?>
