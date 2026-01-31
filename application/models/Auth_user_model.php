<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_user_model extends CI_Model{
    protected $table = 'auth_users';
    public function get_by_email($email){
        return $this->db->where('email', $email)->where('status', 1)->get($this->table)->row();
    }
    public function create($authData){
        return $this->db->insert($this->table, $authData);
    }

}
