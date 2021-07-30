<?php

class Penjualan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penjualan_Model');
        $this->load->model('Customer_Model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Daftar Penjualan';
        $data['penjualan'] = $this->Penjualan_Model->get_all_penjualan();
        $data['customer'] = $this->Customer_Model->get_all_customer();
        if ($this->input->post('keyword')) {
            $data ['penjualan'] = $this->Penjualan_Model->caridatapenjualan();
        }

        $this->load->view('template/header', $data);
        $this->load->view('penjualan/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Penjualan';

        $this->form_validation->set_rules('penjualan_id', 'ID Penjualan', 'required');
        $this->form_validation->set_rules('tgl_penjualan', 'Tanggal Penjualan', 'required');
        $this->form_validation->set_rules('cust_id', 'ID Customer', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('penjualan/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->Penjualan_Model->tambahdatapenjualan();
            $this->session->set_flashdata('flash', 'ditambahkan');
            
            redirect('penjualan');
        }
    }

    public function hapus($penjualan_id)
    {
        $this->Penjualan_Model->hapusdatapenjualan($penjualan_id);
        $this->session->set_flashdata('flash', 'dihapus');

        redirect('penjualan');
    }

    public function detail($penjualan_id)
    {
        $data['judul'] = "Detail Data Penjualan";
        $data['penjualan'] = $this->db->get_where('penjualan', ['penjualan_id' => $penjualan_id])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('penjualan/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($penjualan_id)
    {
        $data['judul'] = 'Form Edit Data Penjualan';
        $data['penjualan'] = $this->Penjualan_Model->get_penjualan_id($penjualan_id);
        $data['keterangan'] = ['LUNAS', 'BELUM'];

        $this->form_validation->set_rules('penjualan_id', 'ID Penjualan', 'required');
        $this->form_validation->set_rules('tgl_penjualan', 'Tanggal Penjualan', 'required');
        $this->form_validation->set_rules('cust_id', 'ID Customer', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('penjualan/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->Penjualan_Model->editdatapenjualan();
            $this->session->set_flashdata('flash', 'diedit');

            redirect('penjualan');
        }
    }
}