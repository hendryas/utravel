<?php
class Utravel_model extends CI_Model
{
  public function getDataWisata()
  {
    $this->db->select('a.*,b.bintang_wisata');
    $this->db->where('a.delete_sts', 0);
    $this->db->join('star_wisata b', 'b.id_wisata = a.id_wisata', 'left');
    $this->db->from('wisata a');

    $result = $this->db->get();
    return $result;
  }

  public function getDataWisataByID($id)
  {
    $this->db->select('a.*,b.bintang_wisata');
    $this->db->where('a.id_wisata', $id);
    $this->db->join('star_wisata b', 'b.id_wisata = a.id_wisata', 'left');
    $this->db->from('wisata a');

    $result = $this->db->get();
    return $result;
  }

  public function getDataWisataRand()
  {
    $this->db->select('a.*,b.bintang_wisata');
    $this->db->join('star_wisata b', 'b.id_wisata = a.id_wisata', 'left');
    $this->db->from('wisata a');
    $this->db->limit(2);
    $this->db->order_by('a.id_wisata', 'desc');

    $result = $this->db->get();
    return $result;
  }

  public function getDataUlasanWisataByID($id)
  {
    $this->db->select('a.*, b.nama_customer,b.email_customer');
    $this->db->join('customer b', 'b.id_customer = a.id_customer', 'left');
    $this->db->where('a.id_wisata', $id);
    $this->db->where('a.ulasan_wisata IS NOT NULL');
    $this->db->from('star_wisata a');

    $result = $this->db->get();
    return $result;
  }

  public function getDataBlogPost()
  {
    $this->db->select('a.*');
    $this->db->where('a.delete_sts', 0);
    $this->db->from('blog_post a');

    $result = $this->db->get();
    return $result;
  }

  public function getDataBlogByID($id)
  {
    $this->db->select('a.*');
    $this->db->where('a.id_blog_post', $id);
    $this->db->from('blog_post a');

    $result = $this->db->get();
    return $result;
  }

  public function getDataBlogPostFooter()
  {
    $this->db->select('a.*');
    $this->db->from('blog_post a');
    $this->db->limit(2);

    $result = $this->db->get();
    return $result;
  }

  public function getDataStarWisata($id)
  {
    // $this->db->select('a.*');
    // $this->db->where('a.id_wisata', $id);
    // $this->db->from('star_wisata a');
    $this->db->query("SELECT SUM(bintang_wisata) AS total FROM star_wisata WHERE id_wisata = '$id'");

    $result = $this->db->get();
    return $result;
  }

  public function getDataImageWIsata($id)
  {
    $this->db->select('a.*');
    $this->db->where('a.id_wisata', $id);
    $this->db->from('image_detail a');

    $result = $this->db->get();
    return $result;
  }
}
