<?php

class Pakaian_Model extends CI_model {
    public function get_all_pakaian()
    {
        return $this->db->get('pakaian')->result_array();
    }

    public function tambahdatapakaian()
    {
        $data = [
            "barang_id" => $this->input->post('barang_id'),
            "nama_barang" => $this->input->post('nama_barang'),
            "harga_barang" => $this->input->post('harga_barang'),
            "stok" => $this->input->post('stok'),
            "keterangan" => $this->input->post('keterangan'),
        ];

        $this->db->insert('pakaian', $data);
    }

    public function hapusdatapakaian($barang_id)
    {
        $this->db->where('barang_id', $barang_id);
        $this->db->delete('pakaian');
    }

    public function get_pakaian_id($barang_id)
    {
        return $this->db->get_where('pakaian', ['barang_id'=> $barang_id])->row_array();
    }

    public function editdatapakaian()
    {
        $data = [
            "barang_id" => $this->input->post('barang_id'),
            "nama_barang" => $this->input->post('nama_barang'),
            "harga_barang" => $this->input->post('harga_barang'),
            "stok" => $this->input->post('stok'),
            "keterangan" => $this->input->post('keterangan'),
        ];

        $this->db->where('barang_id', $this->input->post('barang_id'));
        $this->db->update('pakaian', $data);
    }

    public function caridatapakaian()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_barang', $keyword);
        $this->db->or_like('keterangan', $keyword);
        $this->db->or_like('stok', $keyword);
        return $this->db->get('pakaian')->result_array();
    }
}