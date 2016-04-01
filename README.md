# CodeigniterM
Modification of Codeigniter 3 to support Addon Modules
1. Addon Modules are storage in controller folder
   (i) Minimized recode the Codeigniter
   (ii) Security advice

# Modification

1. Add Module.php class to System/Core/

2. Modified Loader.php

	(i) Add class prottect varialbe 
	
   	/**
	 * List of loaded Modules
	 *
	 * @package CodeigniterM
	 * @var	array
	 */
	protected $_ci_modules =	array();

	(ii) Add class loader function
	
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
	
	Happy sharing!!!
	