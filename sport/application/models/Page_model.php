<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class School_model extends CI_Model {


    function get_school() {
        $query = $this->db->get('school');
        return $query->result_array();
    }

}

?>
