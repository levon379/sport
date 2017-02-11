<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

    function get_news() {

        $query = $this->db->limit('3');
        $query = $this->db->order_by('id', 'desc');
        $query = $this->db->get('news');
        return $query->result_array();
    }

    function get_news_show($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('news');
        return $query->result_array();
    }
/////////////////////////admin/////////////////////////////
    function get_news_admin($id, $num=null, $offset=null) {
        if (isset($id)) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get('news',$num, $offset);
        return $query->result_array();
    }
       function edit_news($data) {
         $this->db->update('news', $data, array('id' => $data['id']));
    }
    function add_news($data){

         $this->db->insert('news', $data);
    }
     function delete_news($id) {

        $this->db->where('id', $id);
        $this->db->delete('news'); ;
    }


}

?>
