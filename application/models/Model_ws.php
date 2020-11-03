<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_ws extends CI_Model
{

    public function __construct()
    {
        //parent::__construct();
        $this->load->database();
        $this->load->library(array('session'));
    }

    public function insert($data)
    {
        $this->db->insert('business', $data); //add to database here
        return $this->db->insert_id();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('business', $data);
        //$this->db->insert('business', $data); //add to database here
        //return $this->db->insert_id();
    }

    public function get_business($id)
    {
        return $this->db->get_where('business', array('id' => $id))->result()[0];
    }

    public function update_yt_video($id, $data)
    {
        $this -> db -> where('business_id', $id);
        $this -> db -> delete('youtube_video');

        foreach ($data as $value) {
            $yt_video = array(
                'business_id' => $id,
                'yt'     => $value
            );
            $this->db->insert('youtube_video', $yt_video); //add to database here
        }
    }

    public function insert_product($data)
    {
        $this->db->insert('product', $data); //add to database here
        return $this->db->insert_id();
    }

    
    public function get_product($id)
    {
        return $this->db->get_where('product', array('id' => $id))->result()[0];
    }
    public function get_product_by_businessId($id)
    {
        return $this->db->get_where('product', array('business_id' => $id))->result();
    }
    
    public function insert_gallery($data)
    {
        $this->db->insert('gallery', $data); //add to database here
        $last_id =  $this->db->insert_id();
        return $this->db->get_where('gallery', array('id' => $last_id))->result()[0];
    }

    public function get_gallery($id)
    {
        return $this->db->get_where('gallery', array('business_id' => $id))->result();
    }
    public function get_youtube($id)
    {
        return $this->db->get_where('youtube_video', array('business_id' => $id))->result();
    }
}
