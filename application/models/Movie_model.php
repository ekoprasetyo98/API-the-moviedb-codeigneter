<?php

class Jadwal_model extends CI_model
{

public function cariDataMovie()
    {
        $keyword=$this->input->post('keyword',true);
        $this->db->like('original_title',$keyword);
        $this->db->or_like('Tanggal',$keyword);
       


        return $this->db->get('sholat')->result_array();
    }
   }