<?php
/**
 * User Model
 *
 * Long description for class (if any)...
 * @author     Pradeep Rajapaksha <pradeepprasanna.rajapaksha4@gmail.lk>
 * @copyright  2016
 * @license    
 * @version    
 * @link       
 * @since      Class available since Release 1.0.0
 */

class User_m extends MY_Model
{
    protected $_table_name = 'users';
    protected $_primary_key = 'id';
    protected $_primary_filter = 'intval';
    protected $_order_by = 'f_name';
    protected $_timestamps = FALSE;
   
    public    $loginRules = array(
        'username' => array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'trim|required|max_length[50]'
        ),
        'password' => array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required|max_length[50]'
        )
    );

    public    $rulesUpdate = array(
        'f_name' => array(
            'field' => 'f_name',
            'label' => 'First Name',
            'rules' => 'trim|required|max_length[50]'
        ),
        'l_name' => array(
            'field' => 'l_name',
            'label' => 'Second Name',
            'rules' => 'trim|required|max_length[50]'
        ),
        'username' => array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'trim|required|max_length[50]'
        ),
        // 'status' => array(
        //     'field' => 'status',
        //     'label' => 'Status',
        //     'rules' => 'trim|required'
        // )
    );
    public    $rulesNewUser = array(
        'f_name' => array(
            'field' => 'f_name',
            'label' => 'First Name',
            'rules' => 'trim|required|max_length[50]'
        ),
        'l_name' => array(
            'field' => 'l_name',
            'label' => 'Second Name',
            'rules' => 'trim|required|max_length[50]'
        ),
        'username' => array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'trim|required|max_length[50]'
        ),
        'password' => array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required|max_length[50]'
        ),
        'status' => array(
            'field' => 'status',
            'label' => 'Status',
            'rules' => 'trim|required'
        )
    );

    
    function __construct(){
        parent::__construct();
    }

    public function login(){
        //echo 'login model';
        $user = $this->get_by(array(
            'username' => $this->input->post('username'),
            'password' => $this->hash($this->input->post('password')),
        ), TRUE); // true, because we want's single use object NOT array of objects

        if(count($user)){
            // log in user
            $data = array(
                'name' => $user->f_name.' '.$user->l_name,
                'username' => $user->username,
                'id' => $user->id,
                'loggedin' => TRUE
            );
            $this->session->set_userdata($data);
            return TRUE;
        }
        else{
            //echo 'user not counted';
            return FALSE;
        }
    }
    public function logout(){
        $this->session->sess_destroy();
    }

    public function logged_in(){
        return (bool) $this->session->userdata('loggedin');
    }

    public function get_new(){
        $user = new stdClass();
        $user->f_name = '';
        $user->l_name = '';
        $user->username = '';
        $user->password = '';
        $user->status = '1';
        return $user;
    }

    public function hash($string){
        // return hash('sha512', $string.config_item('encryption_key'));
        return md5($string);
    }

}
