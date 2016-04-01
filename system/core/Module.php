<?php
/**
 * CodeIgniterM - extended of CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniterM
 * @author	Viettek Team
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Application Module Class
 *
 * This class object is the super class that every library in
 * CodeIgniter will be assigned to.
 *
 * @package		CodeIgniterM
 * @subpackage	Libraries
 * @category	Libraries
 * @author		Viettek Team
 * @link		https://github.com/tieutumathi/CodeigniterM
 */
 
 class CI_Module {
 	/**
	 * Module Name
	 *
	 * @var	String
	 */
	protected $_mod_name =	"";
	
 	/**
	 * Module Name
	 *
	 * @var	String
	 */
	public $load;
	
	/**
	 * Class constructor
	 *
	 * @param	string	$name		Module name
	 * @return	void
	 */
	public function __construct($name)
	{
		$this->_mod_name = $name;
		$this->load =& load_class('Loader', 'core');
		
		log_message('info', 'Module Class Initialized');
	}
	
	public function __get($name)
    {
    	switch ($name) {
			case 'name':
				return $this->_mod_name;
			default:
				return get_instance()->$name;
		}
	}
 }