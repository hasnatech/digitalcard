<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_a extends CI_Model
{

    public function __construct()
    {
        //parent::__construct();
        $this->load->database();
        $this->load->library(array('session'));
    }

    public function insert($data)
    {
        $this->db->insert('users', $data); //add to database here
        return $this->db->insert_id();
    }

    public function get($id)
    {
        return $this->db->get_where('users', array('id' => $id))->result();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }

    public function get_user($email, $password)
    {
        $where = array(
            'email' => $email,
            'password' => $password,
        );
        return $this->db->get_where('users', $where, 1)->result();
    }
}
