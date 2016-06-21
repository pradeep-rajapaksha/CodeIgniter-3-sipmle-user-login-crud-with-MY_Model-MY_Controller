<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Site Controller
 *
 * Long description for class (if any)...
 * @author     Pradeep Rajapaksha <pradeepprasanna.rajapaksha4@gmail.lk>
 * @copyright  2016
 * @license    
 * @version    
 * @link       
 * @since      Class available since Release 1.0.0
 */
 
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
