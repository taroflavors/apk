<?php

class M_catatan extends CI_MODEL
{
    public function get_catatan($data)
    {
        return $this->db->insert('catatan', $data);
    }
    public function ambil_catatan()
    {
        return $this->db->get('catatan')->result_array();
    }
    public function hapus_catatan($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit_catatan($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function print_catatan()
    {
        return $this->db->get('catatan')->result_array();
    }
}
