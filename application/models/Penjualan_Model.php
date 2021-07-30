<?php

class Penjualan_Model extends CI_model {
    public function get_all_penjualan()
    {
        return $this->db->get('penjualan')->result_array();
    }

    public function tambahdatapenjualan()
    {
        $data = [
            "penjualan_id" => $this->input->post('penjualan_id'),
            "cust_id" => $this->input->post('cust_id'),
            "tgl_penjualan" => $this->input->post('tgl_penjualan'),
            "keterangan" => $this->input->post('keterangan'),
        ];

        $this->db->insert('penjualan', $data);
    }

    public function hapusdatapenjualan($penjualan_id)
    {
        $this->db->where('penjualan_id', $penjualan_id);
        $this->db->delete('penjualan');
    }

    public function get_penjualan_id($penjualan_id)
    {
        return $this->db->get_where('penjualan', ['penjualan_id'=> $penjualan_id])->row_array();
    }

    public function editdatapenjualan()
    {
        $data = [
            "penjualan_id" => $this->input->post('penjualan_id'),
            "cust_id" => $this->input->post('cust_id'),
            "tgl_penjualan" => $this->input->post('tgl_penjualan'),
            "keterangan" => $this->input->post('keterangan'),
        ];

        $this->db->where('penjualan_id', $this->input->post('penjualan_id'));
        $this->db->update('penjualan', $data);
    }

    public function caridatapenjualan()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('penjualan_id', $keyword);
        $this->db->or_like('cust_id', $keyword);
        $this->db->or_like('keterangan', $keyword);
        return $this->db->get('penjualan')->result_array();
    }
}