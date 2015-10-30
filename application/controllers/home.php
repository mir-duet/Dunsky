<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author MIR
 */
class Home extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('home_model');
    }

    public function index() {
        $data = array();
        $data['all_category'] = $this->home_model->select_published_category();
        $data['all_blog'] = $this->home_model->select_published_blog();
        $data['main_content'] = $this->load->view('welcome', "$data", true);
        $data['title'] = 'Home';
        $data['$tempus'] = 0;
        $this->load->view('master', $data);
    }

    public function blog() {
        $data = array();
        $data['all_category'] = $this->home_model->select_published_category();
        $data['all_blog'] = $this->home_model->select_all_blog();
        // echo '<pre>';
        // print_r($data['all_category']);
        // exit();

        $data['main_content'] = $this->load->view('home_message', $data, true);
        $data['title'] = 'Blog';
        $data['$tempus'] = 0;
        $this->load->view('master', $data);
    }

    public function blog_details($blog_id) {
        $data = array();
        $data['all_category'] = $this->home_model->select_published_category();
        $data['all_comments'] = $this->home_model->select_published_comments($blog_id);
        $data['blog_info'] = $this->home_model->select_published_blog_by_blog_id($blog_id);

        $data['comments_form'] = $this->load->view('comments_form', $data, true);
        $data['main_content'] = $this->load->view('blog_page', $data, true);
        $data['title'] = 'Blog';
        $data['tempus'] = 1;
        $this->load->view('master', $data);
    }

    public function save_comments() {
        $data = array();
        $data['blog_id'] = $this->input->post('blog_id', true);
        $data['comments_author_name'] = $this->input->post('comments_author_name', true);
        $data['comments_author_email'] = $this->input->post('comments_author_email', true);
        $data['comments_description'] = $this->input->post('comments_description', true);

        $this->home_model->save_comments_info($data);
        $sdata = array();
        $sdata['message'] = "Waiting for apporval!";
        $this->session->set_userdata($sdata);
        redirect("home/blog_details/$data[blog_id]");
    }

    public function manage_comments() {
        $data = array();
        $data['all_comments'] = $this->home_model->select_all_comments();
        $data['admin_maincontent'] = $this->load->view('view_comments', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublish_comments($comments_id) {
        $this->home_model->unpublish_comments_info($comments_id);
        redirect("home/manage_comments");
    }

    public function publish_comments($comments_id) {
        $this->home_model->publish_comments_info($comments_id);
        redirect("home/manage_comments");
    }

}

?>
