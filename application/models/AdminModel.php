<?php

class AdminModel extends CI_Model {

    function InsertUser($data){
        $this->db->insert('user',$data);
        if ($this->db->affected_rows()>=0) {
          return true;
        }
        else
        {
            return false;
        }
    }
}