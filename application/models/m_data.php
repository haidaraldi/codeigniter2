<?php

class M_data extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('tbl_barang');
    }
    function tampil_datadepartemen()
    {
        return $this->db->get('tbl_departemen');
    }
    function tampil_datapengguna()
    {
        return $this->db->get('tbl_pengguna');
    }
}
