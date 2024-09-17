<?php
class PostCommentWisata_model extends CI_Model
{
  public function insertDataCustomer($data)
  {
    $this->db->insert('customer', $data);
  }

  public function getDataCustomer()
  {
    $this->db->select('a.*');
    $this->db->from('customer a');
    $this->db->order_by("a.id_customer", "desc");

    $query = $this->db->get();
    return $query;
  }

  public function insertDataKomen($data)
  {
    $this->db->insert('star_wisata', $data);
  }
}
