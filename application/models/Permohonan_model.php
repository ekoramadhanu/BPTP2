<?php

class Permohonan_model extends CI_model{

    public function insertNewInternship($data){
        return $this->db->insert_batch('internship',$data);
    }
}