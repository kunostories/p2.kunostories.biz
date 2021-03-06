<?php

class index_controller extends base_controller {
	
	/*-------------------------------------------------------------------------------------------------

	-------------------------------------------------------------------------------------------------*/
	public function __construct() {
		parent::__construct();
	} 
		
	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/index/index/
	-------------------------------------------------------------------------------------------------*/
	public function index() {
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_index_index');
			
		# Now set the <title> tag
			$this->template->title = "Vultor: Follow interests, not people and #'s";

		# Pass in the login module
			$this->template->content->signup_module = View::instance('v_signup_module');
	
		# Pass in the login module
			$this->template->content->login_module = View::instance('v_login_module');
	
		# CSS/JS includes
			/*
			$client_files_head = Array("");
	    	$this->template->client_files_head = Utils::load_client_files($client_files);
	    	
	    	$client_files_body = Array("");
	    	$this->template->client_files_body = Utils::load_client_files($client_files_body);   
	    	*/
	      					     		
		# Render the view

			# echo '<pre>';
			# print_r($this->user);
			# echo '</pre>';
			echo $this->template;

	} # End of method
	
	
} # End of class
