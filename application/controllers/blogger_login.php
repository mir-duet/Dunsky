<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of blogger_login
 *
 * @author MIR
 */
class Blogger_Login extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('blogger_login_model');
        $this->load->model('home_model');
    }

    public function sign_up() {
        $data = array();
        $data['all_category']=$this->home_model->select_published_category(); 
        $data['main_content'] = $this->load->view('sign_up', '', TRUE);
        $data['title'] = 'Sign Up';
        $data['$tempus'] = 0;
        $this->load->view('master', $data);
    }

    public function save_blogger() {
        $data = array();
        $data['first_name'] = $this->input->post('first_name', true);
        $data['last_name'] = $this->input->post('last_name', true);
        $data['email_address'] = $this->input->post('email_address', true);
        $data['password'] = $this->input->post('password', true);
        $data['mobile_no'] = $this->input->post('mobile_no', true);
        $data['address'] = $this->input->post('address', true);
        $data['gender'] = $this->input->post('gender', true);
        $data['city'] = $this->input->post('city', true);
        $data['country'] = $this->input->post('country', true);
        $data['zip_code'] = $this->input->post('zip_code', true);

        $this->blogger_login_model->save_blogger_info($data);
        redirect("blogger_login/sign_up");
    }
}

?>
