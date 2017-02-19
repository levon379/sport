<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends CI_Model
{

    function get_page()
    {
        $this->db->limit('3');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('page');
        return $query->result_array();
    }

    function get_page_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('page');
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
        $query = $this->db->get("page");
        $result = $query->result_array();
        return $result;
    }

    function edit_page($data)
    {
        $this->db->update('page', $data, array('id' => $data['id']));
    }

    function add_page($data)
    {

        $this->db->insert('page', $data);
    }

    function delete_page($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('page');
    }


}

