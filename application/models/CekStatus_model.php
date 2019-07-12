<?php

class CekStatus_model extends CI_model{
    public function getStatus($nim){
 
        $query ="select fullname,id,institute,id_kelompok,status from internship where id='".$nim."' || id_kelompok= (select id_kelompok from internship where id='$nim') order by id='$nim' desc" ;
        return $this->db->query($query)->result();
    }
}

?>