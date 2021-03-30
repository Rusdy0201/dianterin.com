<?php

class User_model extends CI_Model
{
    public function index()
    {
        return $query = $this->db->get('user')->result_array();
    }
}