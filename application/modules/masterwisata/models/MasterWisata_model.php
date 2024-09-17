<?php
class MasterWisata_model extends CI_Model
{
  public function getDataWisata()
  {
    $this->db->select('a.*');
    $this->db->where('a.delete_sts', 0);
    $this->db->from('wisata a');

    $result = $this->db->get();
    return $result;
  }

  public function insertDataWisata($data)
  {
    $this->db->insert('wisata', $data);
  }

  public function deleteDataWisata($id, $data)
  {
    $this->db->where('id_wisata', $id);
    $this->db->update('wisata', $data);
  }

  public function updateDataWisata($id, $data)
  {
    $this->db->where('id_wisata', $id);
    $this->db->update('wisata', $data);
  }

  public function getDataWisataDesc()
  {
    $this->db->select('a.*');
    $this->db->where('a.delete_sts', 0);
    $this->db->from('wisata a');
    $this->db->order_by("a.id_wisata", "desc");

    $result = $this->db->get();
    return $result;
  }

  public function insertDataImageDetail($data)
  {
    $this->db->insert('image_detail', $data);
  }
}
