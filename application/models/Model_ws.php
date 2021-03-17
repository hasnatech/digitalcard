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
        $data['user_id'] = $this->session->userdata('id');
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

    public function get_category()
    {
        return $this->db->get_where('category')->result();
    }

    public function get_business($id)
    {
        return $this->db->get_where('business', array('id' => $id))->result();
    }

    public function get_business_company($company)
    {
        $query = "SELECT * from business WHERE REPLACE(Lower(url), ' ', '')='$company'";
        
        return $this->db->query($query)->result();
    }

    public function get_business_user($id, $user)
    {
        return $this->db->get_where('business', array('id' => $id, 'user_id' => $user))->result();
    }

    public function get_business_user_id($id)
    {
        return $this->db->get_where('business', array('user_id' => $id))->result();
    }

    public function update_yt_video($id, $data)
    {
        $this->db->where('business_id', $id);
        $this->db->delete('youtube_video');
        if (isset($data)) {
            foreach ($data as $value) {
                $yt_video = array(
                    'business_id' => $id,
                    'yt'     => $value
                );
                $this->db->insert('youtube_video', $yt_video); //add to database here
            }
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

    public function new_object()
    {
        $data = (object) [
            "id" => "",
            "name" => "",
            "url" => "",
            "company" => "",
            "email" => "",
            "contact_number" => "",
            "whatsapp_number" => "",
            "landline_number" => "",
            "website" => "",
            "g_map" => "",
            "address1" => "",
            "address2" => "",
            "pincode" => "",
            "city" => "",
            "state" => "",
            "country" => "",
            "est_year" => "",
            "gst" => "",
            "about" => "",
            "facebook" => "",
            "twitter" => "",
            "instagram" => "",
            "linkedin" => "",
            "youtube" => "",
            "pinterest" => "",
            "other1" => "",
            "other2" => "",
            "other3" => "",
            "bankname" => "",
            "account_no" => "",
            "branchname" => "",
            "ifsc_code" => "",
            "account_holder_name" => "",
            "account_type" => "",
            "iban" => "",
            "swift" => "",
            "googlepay" => "",
            "paytm" => "",
            "googlepay_qr" => "",
            "paytm_qr" => "",
            "upiid" => "",
            "phonepe" => "",
            "phonepe_qr" => "",
            "upiid_qr" => "",
            "created_at" => "",
            "updated_at" => "",
            "user_id" => "",
            "is_admin" => "",
            "is_agent" => "",
            "id_agent" => "",
            "is_confirmed" => "",
            "is_deleted" => "",
            "product" => array(),
            "gallery" => array(),
            "youtube_list" => array()
        ];

        return $data;
    }
    public function insert_logo($id)
    {
    }
    public function delete_product($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('product');
    }

    public function delete_gallery($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('gallery');
    }
}
