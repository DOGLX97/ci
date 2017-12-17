<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class User_model extends CI_model{
        public function save($uname,$pwd){
            $this->db->insert('user',array(
                'uname'=>$uname,
                'pass'=>$pwd
            ));
            return $this->db->affected_rows();
        }
    }
?>