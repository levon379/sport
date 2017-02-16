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
    function get_photo_admin($offset, $per_page = null)
    {
        $offset = (int) $offset;
        if ($offset < 0) {
            $offset = 0;
        }
        $from = $offset;
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
    public function get_home_slider_data()
    {
        $query = $this->db->query("SELECT file_name AS src, date_created,'photo' AS `type` FROM `photo` UNION SELECT `url` AS src, date_created,'video' AS `type` FROM `video` ORDER BY `date_created` DESC LIMIT 4");
        $data = $query->result_array();
        $response = array();
        foreach ($data as $item) {
            if ($item['type'] == 'photo') {
                $response[] = $item;
            } else {
                $url = $item['src'];
                if (!preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) {
                    continue;
                }
                $video_id = $match[1];
                $item['src'] = "https://www.youtube.com/embed/{$video_id}?rel=0&showinfo=0&color=white&iv_load_policy=3";
                $response[] = $item;
            }
        }
        return $response;
    }
}