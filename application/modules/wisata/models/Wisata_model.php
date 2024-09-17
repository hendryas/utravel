<?php
class Wisata_model extends CI_Model
{
  public function getDataWisataByID()
  {
    $this->db->select('a.*,b.bintang_wisata');
    $this->db->join('star_wisata b', 'b.id_wisata = a.id_wisata', 'left');
    $this->db->from('wisata a');

    $result = $this->db->get();
    return $result;
  }
}
