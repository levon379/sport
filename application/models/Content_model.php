<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Content_model extends CI_Model
{

    function get_page()
    {
        $this->db->limit('3');
        $query = $this->db->get('content');
        return $query->result_array();
    }
    function get_about_us()
    {
        $this->db->limit('1');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('content');
        return $query->row();
    }

    function get_page_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('content');
        return $query->row();
    }

/////////////////////////admin/////////////////////////////
    function get_all_page($offset, $per_page = null)
    {
        $offset = (int) $offset;
        if ($offset < 0) {
            $offset = 0;
        }
        $from = $offset;
        $this->db->order_by("id", "desc");
        $this->db->limit($per_page, $from);
        $query = $this->db->get("content");
        $result = $query->result_array();
        return $result;
    }

    function edit_page($data)
    {
        $this->db->update('content', $data, array('id' => $data['id']));
    }






}

