<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of blogger_login_model
 *
 * @author MIR
 */
class Blogger_Login_Model extends CI_Model{
    //put your code here
    public function save_blogger_info($data)
    {
        $this->db->insert('tbl_blogger',$data);
    }
}

?>
