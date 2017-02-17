<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Video_model extends CI_Model {


    function get_video_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('video');
        return $query->row();
    }
    public function get_all($offset, $per_page = null)
    {
        $offset = (int) $offset;
        if ($offset < 0) {
            $offset = 0;
        }
        $from = $offset;
        $this->db->order_by("id", "desc");
        $this->db->limit($per_page, $from);
        $query = $this->db->get("video");
        $data = $query->result_array();
        $response = array();
        foreach ($data as $item) {

                $url = $item['url'];
                if (!preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) {
                    continue;
                }
                $video_id = $match[1];
                $item['url'] = "https://www.youtube.com/embed/{$video_id}?rel=0&showinfo=0&color=white&iv_load_policy=3";
                $response[] = $item;
            }

        return $response;
    }
/////////////////////////admin/////////////////////////////
    function  get_url($offset, $per_page = null) {


        $offset = (int) $offset;
        if ($offset < 0) {
            $offset = 0;
        }
        $from = $offset;
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
