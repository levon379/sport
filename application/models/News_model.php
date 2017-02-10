<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

    function get_news_cat($id, $num=null, $offset=null) {


        if (isset($id)) {
            $this->db->where('category_id', $id);
        }
        $query = $this->db->get('news',$num, $offset);
        return $query->result_array();
    }

    function get_news_about($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('news');
        return $query->result_array();
    }
//////////////////////////////////////////////////////
       function edit_news_about($data) {
    
         $this->db->update('news', $data, array('id' => $data['id']));
       // var_dump($a);die;
    }
    function add_news($data){
         $this->db->insert('news', $data);
    }
     function delete_news($id) {

        $this->db->where('id', $id);
        $this->db->delete('news'); ;
    }
    /////categories/////////////////////////////////
    function get_news() {

        $this->db->order_by('id', 'asc');
        $query = $this->db->get('news');
        return $query->result_array();
    }
    function add_category($data) {

        $this->db->insert('category', $data);
    }
    function edit_categories($data) {

        $this->db->update('category', $data, array('id' => $data['id']));
    }
    function delete_categories($id) {

        $this->db->where('id', $id);
        $this->db->delete('category'); ;
    }
}

?>
