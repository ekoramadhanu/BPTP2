<?php

class CekStatus_model extends CI_model{
    public function getStatus($nim){
        $query ="select fullname,id,institute,status from internship where id=".$nim;
        return $this->db->query($query)->result();
    }
}

?>