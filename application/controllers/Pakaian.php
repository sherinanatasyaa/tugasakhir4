<?php

class Pakaian extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pakaian_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Pakaian';
        $data['pakaian'] = $this->Pakaian_Model->get_all_pakaian();
        if ($this->input->post('keyword')) {
            $data ['pakaian'] = $this->Pakaian_Model->caridatapakaian();
        }
        $this->load->view('template/header', $data);
        $this->load->view('pakaian/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Barang';
        
        $this->form_validation->set_rules('barang_id', 'ID Barang', 'required|numeric');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('harga_barang', 'Harga Barang', 'required|numeric');
        $this->form_validation->set_rules('stok', 'Stok Barang', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('pakaian/tambah');
            $this->load->view('template/footer');
        } else {
            $this->Pakaian_Model->tambahdatapakaian();
            $this->session->set_flashdata('flash', 'ditambahkan');

            redirect('pakaian');
        }
    }

    public function hapus($barang_id)
    {
        $this->Pakaian_Model->hapusdatapakaian($barang_id);
        $this->session->set_flashdata('flash', 'dihapus');

        redirect('pakaian');
    }

    public function detail($barang_id)
    {
        $data['judul'] = 'Detail Data Barang';
        $data['pakaian'] = $this->Pakaian_Model->get_pakaian_id($barang_id);

        $this->load->view('template/header', $data);
        $this->load->view('pakaian/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($barang_id)
    {
        $data['judul'] = 'Form Edit Data Barang';
        $data['pakaian'] = $this->Pakaian_Model->get_pakaian_id($barang_id);
        $data['keterangan'] = ['OK', 'NO'];

        $this->form_validation->set_rules('barang_id', 'ID Barang', 'required|numeric');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('harga_barang', 'Harga Barang', 'required|numeric');
        $this->form_validation->set_rules('stok', 'Stok Barang', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('pakaian/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->Pakaian_Model->editdatapakaian();
            $this->session->set_flashdata('flash', 'diedit');

            redirect('pakaian');
        }
    }
}