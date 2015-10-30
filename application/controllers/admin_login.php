<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_Login extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
    }
    
    public function index()
    {
        $this->load->view('admin/login');
    }
    public function login_check()
    {
        $this->load->view('admin/admin_master');
        $admin_email_address=$this->input->post('admin_email_address',true);
        $admin_password=$this->input->post('password',true);
        $result=$this->admin_model->check_login_info($admin_email_address,$admin_password);
        /*echo '<pre>';
        print_r($result);
        exit();*/
        $sdata=array();
        if($result)
        {
            $sdata['admin_name']=$result->admin_name;
            $sdata['admin_id']=$result->admin_id;
            $sdata['login_status']=TRUE;
            $this->session->set_userdata($sdata);
            redirect("super_admin");
        }
        else{
            
            $sdata['exception']= "User id / Password Invalid !";
            $this->session->set_userdata($sdata);
            redirect("admin_login");
        }
    }
}

?>
