<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ijazah_model extends CI_Model
{
    private $table_ijazah = 'ijazah';

    public function getAllIjazah()
    {
        $this->db->from($this->table_ijazah);
        $query = $this->db->get();
        return $query->result();
    }

    public function getIjazahById($id)
    {
        $this->db->from($this->table_ijazah);
        $query = $this->db->where('id', $id)->get();
        return $query->result();
    }

    public function getIjazah()
    {
        $this->db->from($this->table_ijazah);
        $query = $this->db
            ->where('npsn', $this->session->nama_pengguna)->get();
        return $query->result();
    }

    //By NPSN
    public function getWhereIjazah($npsn)
    {
        $this->db->from($this->table_ijazah);
        $query = $this->db->where('npsn', $npsn)->get();
        return $query->result();
    }

    public function save_ijazah($data)
    {
        $this->db->insert_batch('ijazah', $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function save_data()
    {
        $data = [
            'npsn' => $this->input->post('npsn'),
            'nisn' => $this->input->post('nisn'),
            'nama_siswa' => $this->input->post('nama_siswa'),
            'tahun_lulus' => $this->input->post('tahun_lulus'),
            'no_ijazah' => $this->input->post('no_ijazah'),
            'ijazah_file' => $this->input->post('ijazah_file'),
        ];

        $this->db->insert('ijazah', $data);
    }

    public function update_data()
    {
        $config['upload_path']          = './ijazah/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        // $this->upload->initialize($config);
        $this->load->library('upload', $config);

        $ijazah_file = $this->upload->data('userfile');
        $ijazah_file = $ijazah_file['file_name'];
        $data = [
            'ijazah_file' => $ijazah_file,
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('ijazah', $data);
        // $this->db->where('id', $id)->update('ijazah', $data);
    }
}
