<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Photo_model extends CI_Model {

    function get_photo() {

        $query = $this->db->limit('3');
        $query = $this->db->order_by('id', 'desc');
        $query = $this->db->get('photo');
        return $query->result_array();
    }

    function get_photo_show($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('photo');
        return $query->result_array();
    }
/////////////////////////admin/////////////////////////////
    function get_photo_admin($id, $num=null, $offset=null) {


        if (isset($id)) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get('photo',$num, $offset);
        return $query->result_array();
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
        $this->db->delete('photo'); ;
    }


}

?>
