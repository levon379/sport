<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Video_model extends CI_Model {

    function get_video() {

        $query = $this->db->limit('3');
        $query = $this->db->order_by('id', 'desc');
        $query = $this->db->get('video');
        return $query->result_array();
    }

    function get_video_show($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('video');
        return $query->result_array();
    }
/////////////////////////admin/////////////////////////////
    function get_video_admin($id, $num=null, $offset=null) {


        if (isset($id)) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get('video',$num, $offset);
        return $query->result_array();
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
