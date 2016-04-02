# CodeigniterM

	Modification of Codeigniter 3 to support Addon Modules

# Modification

	1. Add Module.php class to System/Core/

	2. Modified Loader.php

		(i) Add Loader->_ci_modules variable
	
		   	/**
			 * List of loaded Modules
	   	 	 *
			 * @package CodeigniterM
			 * @var	array
			 */
			protected $_ci_modules =	array();

		(ii) Add Loader->module() fucntion
			/**
			 * Modules Loader
			 *
			 * Loads and instantiates modules.
			 * Designed to be called from application controllers.
			 *
			 * @package CodeigniterM
			 * @param	string	$module		Module name
			 * @param	array	$params		Optional parameters to pass to the module class constructor
			 * @param	string	$object_name	An optional object name to assign to
			 * @return	object
			 */
			 public function module($module, $params = NULL, $object_name = NULL)
			
		(iii) Add Loader->_ci_autoloader_module() function
			/**
	 		 * CI Autoloader for Addon Modules
			 *
			 * Loads component listed in the modules/config/autoload.php file.
			 *
			 * @package CodeIgniterM 
			 * @used-by	CI_Loader::module()
			 * @return	void
			 */
			 protected function _ci_autoloader_module($module)
	
# How to use it?
	
	Please see a sample add-on module in application/controllers/sample.
	This modification used add_package_path()core CI function to add extended
	module package. Each package required to place inside application/controllers
	folder.  By placing inside the controller folder, the add-on module package
	will have ability to keep their controller together inside package folder,
	without need to move it when the package is deployed. Note from the sample
	module package, the controller is place in package root folder.
	
	application/controllers/sample
	      controller.php
	      config/
	      libraries/
	      models/
	      views/
	      
# Coding

	(i) Load the module
	
		$this->load->module('sample');
	
	(ii) Loading the view, libraries, model and others using same process as standard core component
	
		$this->load->view('sample_addon');
	
		$this->load->models('sample_model');
		$this->Sample_model->say_hell();
	
		To help the coding easy to read, the module class could be use as below:
		
		$this->load->module('Account');
		$this->Account->load->model('Privilege');
		$this->Account->Privilege->say_hell();

# Last Words:

	This could be a very be very stupid way to approach to solve this problem, I am more than happy to hear from you.
	
	Happy sharing!!! 2016
	