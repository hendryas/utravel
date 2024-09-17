<?php
class MasterBlogPost_model extends CI_Model
{
  public function getDataBlogPost()
  {
    $this->db->select('a.*');
    $this->db->where('a.delete_sts', 0);
    $this->db->from('blog_post a');

    $result = $this->db->get();
    return $result;
  }

  public function insertDataBlog($data)
  {
    $this->db->insert('blog_post', $data);
  }

  public function deleteDataBlog($id, $data)
  {
    $this->db->where('id_blog_post', $id);
    $this->db->update('blog_post', $data);
  }

  public function updateDataBlog($id, $data)
  {
    $this->db->where('id_blog_post', $id);
    $this->db->update('blog_post', $data);
  }
}
