<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home_model
 *
 * @author MIR
 */
class home_model extends CI_Model{
    //put your code here
    public function select_published_category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_published_blog() {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_blog() {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_published_blog_by_blog_id($blog_id) {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('blog_id', $blog_id);
        //$this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    public function save_comments_info($data)
    {
        $this->db->insert('tbl_comments', $data);
    }
    public function select_all_comments(){
        $this->db->select('*');
        $this->db->from('tbl_comments');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function unpublish_comments_info($comments_id)
    {
        $this->db->set('publication_status',0);
        $this->db->where('comments_id',$comments_id);
        $this->db->update('tbl_comments');
    }
    public function publish_comments_info($comments_id){
        $this->db->set('publication_status',1);
        $this->db->where('comments_id',$comments_id);
        $this->db->update('tbl_comments');
    }
    
    public function select_published_comments($blog_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_comments');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
}

?>
