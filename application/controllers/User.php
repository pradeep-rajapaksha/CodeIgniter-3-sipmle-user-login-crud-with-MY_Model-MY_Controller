<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * User Controller
 *
 * Long description for class (if any)...
 * @author     Pradeep Rajapaksha <pradeepprasanna.rajapaksha4@gmail.lk>
 * @copyright  2016
 * @license    
 * @version    
 * @link       
 * @since      Class available since Release 1.0.0
 */
 
class User extends MY_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('user_m');
        $this->load->library('pagination');
        
        // $this->user_m->logged_in() == FALSE || redirect('user/login?login=false','refresh');
    }
    
	public function index()
	{
		$this->user_m->logged_in() == TRUE || redirect('user/login?login=false','refresh');
		
		//fetch all users from database
        $config['base_url'] = base_url('user/index/');
        $config['total_rows'] = sizeof($this->user_m->get());
        $config['per_page'] = 10;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        // catch page number
        $pageNumber = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $this->data['users'] = $this->user_m->pagination($config['per_page'], $pageNumber);
        $this->data['paginationLinks'] = $this->pagination->create_links();
		
		
		$this->data['subview'] = 'user/index';
        $this->load->view('_layout',$this->data);
		
	}
	
	public function edit($id = NULL)
    {
        // Fetch a user or set a new one
        if($id)
        {
            $this->data['user'] = $this->user_m->get($id);
            count($this->data['user']) || $this->data['error'][] = 'User could not be found';
        }
        else
        {
            redirect('user/add');
        }

        // Set up the form and rules
        $rules = $this->user_m->rulesUpdate;
        $this->form_validation->set_rules($rules);
        // var_dump($this->input->post());
        // process the form
        if($this->form_validation->run() == TRUE)
        {
            $data = $this->user_m->array_from_post(array('f_name','l_name','username','status'));
            //$data['password'] = $this->user_m->hash($data['password']);
            //print_r($data);
            // exit();

            $this->user_m->save($data,$id);

            redirect('user?updated=true');

        }

        // Load the view
        $this->data['subview'] = 'user/edit';
        $this->load->view('_layout',$this->data);
    }
	
	public function add($id = NULL)
	{
	    $this->data['user'] = $this->user_m->get_new();

        // Set up the form and rules
        $rules = $this->user_m->rulesNewUser;
        // $id || $rules['password'] .= '|required'; //assiume $id is set, if not password is required. (new user or existing user)
        $this->form_validation->set_rules($rules);

        var_dump($this->input->post());
        // process the form
        if($this->form_validation->run() == TRUE)
        {
            $data = $this->user_m->array_from_post(array('f_name','l_name','username','status'));
            $data['password'] = $this->user_m->hash($data['password']);

            $newUserID = $this->user_m->save($data,$id);
            // redirecting to user data grid
            redirect('user?inserted=true');

            //redirect('user');
        }

        // Load the view
        $this->data['subview'] = 'user/add';
        $this->load->view('_layout',$this->data);
	}
	
	public function login()
	{
		$this->load->view('_login'); 
	}
    
	public function u_login()
	{
		// set form
		$rules = $this->user_m->loginRules;
        $this->form_validation->set_rules($rules);

        // process form
        if($this->form_validation->run() == TRUE){
            // can login and redirect it..
            // echo 'form validation done';
            if($this->user_m->login() == TRUE){
            	// echo 'login Passed';
                // redirect('user/login?login=true');
                redirect('site/index?login=true');
            }
            else{
                // echo 'login Failed ddd';
                $this->session->set_flashdata('error','That email/password combination does not exist');
                redirect('user/login?login=false','refresh');
            }
        }
        redirect('user/login?login=false','refresh');
        
	}
	
	public function delete($id){
	        // this function only access by Admin, if not redirect
	        if($this->session->userdata('usertype')!='1'){
	            redirect('dashboard');
	        }
	        $this->staff_m->delete($id);
	        redirect('user/?delete=true');
	        //redirect('user'); // Redirecting to users list view
	    }
	
}
