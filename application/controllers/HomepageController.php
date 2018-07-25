<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomepageController extends CI_Controller {

	public function index()
	{
		/**
		 * By default, the boilerplate is using Codeigniter default view loaders
		 * Thus i have made a view helper to avoid loading important layouts such as the navigation and the footer
		 * Feel free to use it lol. 
		 */
		$this->load->view('homepage');
	}
}
