<?php
class BudgetWisata_model extends CI_Model
{
  public function getDataPencarian($budget, $lokasi)
  {
    $this->db->select('a.*');
    $this->db->where('a.harga_tiket <=', $budget);
    $this->db->where('a.lokasi_wisata', $lokasi);
    $this->db->from('wisata a');

    $result = $this->db->get();
    return $result;
  }
}
