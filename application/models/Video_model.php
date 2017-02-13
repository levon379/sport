<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Video_model extends CI_Model {

    function get_video() {

        $query = $this->db->limit('3');
        $query = $this->db->order_by('id', 'desc');
        $query = $this->db->get('video');
        return $query->result_array();
    }

    function get_video_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('video');
        return $query->row();
    }
/////////////////////////admin/////////////////////////////
    function get_video_admin($page_number, $per_page = null) {


        $page_number = $page_number-1;
        if ($page_number<0) {
            $page_number = 0;
        }
        $from = $page_number*$per_page;
        $this->db->order_by("id", "desc");
        $this->db->limit($per_page, $from);
        $query = $this->db->get("video");
        $result = $query->result_array();
        return $result;
    }
       function edit_video($data) {
         $this->db->update('video', $data, array('id' => $data['id']));
       // var_dump($a);die;
    }
    function add_video($data){

         $this->db->insert('video', $data);
    }
     function delete_video($id) {

        $this->db->where('id', $id);
        $this->db->delete('video'); ;
    }


}

?>
