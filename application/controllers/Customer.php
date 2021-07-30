<?php

class Customer extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Customer';
        $data['customer'] = $this->Customer_Model->get_all_customer();
        if ($this->input->post('keyword')) {
            $data ['customer'] = $this->Customer_Model->caridatacustomer();
        }
        $this->load->view('template/header', $data);
        $this->load->view('customer/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Customer';
        
        $this->form_validation->set_rules('cust_id', 'ID Customer', 'required');
        $this->form_validation->set_rules('nama_cust', 'Nama Customer', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telp', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Customer', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('customer/tambah');
            $this->load->view('template/footer');
        } else {
            $this->Customer_Model->tambahdatacustomer();
            $this->session->set_flashdata('flash', 'ditambahkan');

            redirect('customer');
        }
    }

    public function hapus($cust_id)
    {
        $this->Customer_Model->hapusdatacustomer($cust_id);
        $this->session->set_flashdata('flash', 'dihapus');

        redirect('customer');
    }

    public function detail($cust_id)
    {
        $data['judul'] = 'Detail Data Customer';
        $data['customer'] = $this->Customer_Model->get_customer_id($cust_id);

        $this->load->view('template/header', $data);
        $this->load->view('customer/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($cust_id)
    {
        $data['judul'] = 'Form Edit Data Customer';
        $data['customer'] = $this->Customer_Model->get_customer_id($cust_id);
        $data['keterangan'] = ['LUNAS', 'BELUM'];

        $this->form_validation->set_rules('cust_id', 'ID Customer', 'required');
        $this->form_validation->set_rules('nama_cust', 'Nama Customer', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telp', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Customer', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('customer/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->Customer_Model->editdatacustomer();
            $this->session->set_flashdata('flash', 'diedit');

            redirect('customer');
        }
    }
}