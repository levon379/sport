<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Photo_model extends CI_Model {

    function get_photo() {

        $query = $this->db->limit('3');
        $query = $this->db->order_by('id', 'desc');
        $query = $this->db->get('photo');
        return $query->result_array();
    }

    function get_photo_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('photo');
        return $query->row();
    }
/////////////////////////admin/////////////////////////////
    function get_photo_admin($page_number, $per_page = null)
    {
        $page_number = $page_number-1;
        if ($page_number<0) {
            $page_number = 0;
        }
        $from = $page_number*$per_page;
        $this->db->order_by("id", "desc");
        $this->db->limit($per_page, $from);
        $query = $this->db->get("photo");
        $result = $query->result_array();
        return $result;
    }
    function edit_photo($data) {
        $this->db->update('photo', $data, array('id' => $data['id']));
        // var_dump($a);die;
    }
    function add_photo($data){

        $this->db->insert('photo', $data);
    }
    function delete_photo($id) {

        $this->db->where('id', $id);
        $this->db->delete('photo');
    }


}

?>
