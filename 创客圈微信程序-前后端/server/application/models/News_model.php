<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_news($slug = FALSE)
{
  $query = $this->db->get('user');
  return $query->result_array();
}
}
