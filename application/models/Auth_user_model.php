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
    public function get_all_with_profiles($limit = 10, $offset = 0) {
        $this->db->select('auth_users.id, auth_users.username, auth_users.email, auth_users.role, user_profiles.full_name, user_profiles.phone, user_profiles.address');
        $this->db->from($this->table);
        $this->db->join('user_profiles', 'auth_users.id = user_profiles.user_id', 'left');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result();
    }

    public function count_all() {
        return $this->db->count_all($this->table);
    }
}
