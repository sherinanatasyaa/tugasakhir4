<?php

class Customer_Model extends CI_model {
    public function get_all_customer()
    {
        return $this->db->get('customer')->result_array();
    }

    public function tambahdatacustomer()
    {
        $data = [
            "cust_id" => $this->input->post('cust_id'),
            "nama_cust" => $this->input->post('nama_cust'),
            "no_telp" => $this->input->post('no_telp'),
            "alamat" => $this->input->post('alamat'),
            "keterangan" => $this->input->post('keterangan'),
        ];

        $this->db->insert('customer', $data);
    }

    public function hapusdatacustomer($cust_id)
    {
        $this->db->where('cust_id', $cust_id);
        $this->db->delete('customer');
    }

    public function get_customer_id($cust_id)
    {
        return $this->db->get_where('customer', ['cust_id'=> $cust_id])->row_array();
    }

    public function editdatacustomer()
    {
        $data = [
            "cust_id" => $this->input->post('cust_id'),
            "nama_cust" => $this->input->post('nama_cust'),
            "no_telp" => $this->input->post('no_telp'),
            "alamat" => $this->input->post('alamat'),
            "keterangan" => $this->input->post('keterangan'),
        ];

        $this->db->where('cust_id', $this->input->post('cust_id'));
        $this->db->update('customer', $data);
    }

    public function caridatacustomer()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_cust', $keyword);
        $this->db->or_like('keterangan', $keyword);
        return $this->db->get('customer')->result_array();
    }
}