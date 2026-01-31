<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_profile_model extends CI_Model {
    protected $table = 'user_profiles';
    public function create($profileData){
        return $this->db->insert($this->table, $profileData);
    }

}