<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model
{

    function get_news()
    {
        $this->db->limit('3');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('news');
        return $query->result_array();
    }

    function get_news_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('news');
        return $query->row();
    }

/////////////////////////admin/////////////////////////////
    function get_news_admin($page_number, $per_page = null)
    {
        $page_number = $page_number-1;
        if ($page_number<0) {
            $page_number = 0;
        }
        $from = $page_number*$per_page;
        $this->db->order_by("id", "desc");
        $this->db->limit($per_page, $from);
        $query = $this->db->get("news");
        $result = $query->result_array();
        return $result;
    }

    function edit_news($data)
    {
        $this->db->update('news', $data, array('id' => $data['id']));
    }

    function add_news($data)
    {

        $this->db->insert('news', $data);
    }

    function delete_news($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('news');;
    }
}

