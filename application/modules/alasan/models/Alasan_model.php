<?php
class Alasan_model extends CI_Model
{
  public function insertDataAlasan($data)
  {
    $this->db->insert('tbl_alasan', $data);
  }

  public function getDataAlasan()
  {
    $this->db->select('a.*,b.nama');
    $this->db->join('tbl_peserta b', 'b.id_peserta = a.id_peserta', 'left');
    $this->db->from('tbl_alasan a');

    $result = $this->db->get();
    return $result;
  }

  public function deleteDataAlasan($id)
  {
    $this->db->where('id_alasan', $id);
    $this->db->delete('tbl_alasan');
  }

  public function updateDataAlasan($id, $data)
  {
    $this->db->where('id_alasan', $id);
    $this->db->update('tbl_alasan', $data);
  }

  public function getDataPesertaAlasan($id)
  {
    $this->db->select('a.*');
    $this->db->where('a.id_user', $id);
    $this->db->from('tbl_peserta a');

    $result = $this->db->get();
    return $result;
  }

  public function getDataPeserta($id)
  {
    $this->db->select('a.*');
    $this->db->where('a.id_user', $id);
    $this->db->from('tbl_peserta a');

    $result = $this->db->get();
    return $result;
  }
}
