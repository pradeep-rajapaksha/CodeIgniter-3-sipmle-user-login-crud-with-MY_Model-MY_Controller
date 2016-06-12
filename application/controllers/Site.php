<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends MY_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('user_m');
        
        // $this->user_m->logged_in() == FALSE || redirect('user/login?login=false','refresh');
    }
    
	public function index()
	{
		
		$this->data['subview'] = 'site/index';
        $this->load->view('_layout',$this->data);
		
	}
	
	
	
	
	
}