<?php
class Test_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	function show_test() {
		return "Output from Test_Model";
	}
}
