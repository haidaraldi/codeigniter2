<?php

class Read extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['tbl_barang'] = $this->m_data->tampil_data()->result();
        $this->load->view('tes/v_tampil', $data);
    }
    public function departemen()
    {
        $data['tbl_departemen'] = $this->m_data->tampil_datadepartemen()->result();
        $this->load->view('tes/v_tampildepart', $data);
    }
    public function pengguna()
    {
        $data['tbl_pengguna'] = $this->m_data->tampil_datapengguna()->result();
        $this->load->view('tes/v_tampilpengguna', $data);
    }
}
