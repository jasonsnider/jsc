<?php
/**
 * Executes all test cases for The Parbake Project excluding third party plugins
 * Excludes
 * -AuditLog
 * -DebugKit
 * -Search
 * -Tags
 */
//Call Parbake's AllTestCase
require_once 'AllTestCase.php';

/**
 * Executes all test cases for The Parbake Project excluding third party plugins
 * Excludes
 * -AuditLog
 * -DebugKit
 * -Search
 * -Tags
 */
class AllGroupTest extends AllTestCase {

	/**
	 * Execite all tests for core plugins
	 *
	 * @return PHPUnit_Framework_TestSuite the instance of PHPUnit_Framework_TestSuite
	 */
	public static function suite() {
		
		//Exclude thrid party plugins
		$exclude = array(
			'AuditLog',
			'DebugKit',
			'Search',
			'Tags'
		);
		
		$suite = new self;
		foreach(App::objects('plugin') as $plugin):
			if(!in_array($plugin, $exclude)){
				$suite->addTestFiles($suite->getTestFiles($plugin));
			}
		endforeach;
		return $suite;
	}
}