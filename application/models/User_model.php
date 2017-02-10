<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {


        public function login_check($email,$password)
	{  
		    $sql = "SELECT * FROM users WHERE email = '" . $email . "' AND password = '" . md5($password) . "'";
                $val = $this->db->query($sql);

                if ($val->num_rows()) {
                    foreach ($val->result_array() as $recs => $res) {
                        $this->session->set_userdata(array(
                            'id' => $res['id'],
                            'username' => $res['username'],
                            'email' => $res['email'],                            
                            'is_client_login' => true
                                )
                        );
                    }
                    

                    redirect('admin/adminnews/newsindex');
                } 
	}
       
}
