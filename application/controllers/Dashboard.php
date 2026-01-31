<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->requireLogin(); // Giriş yapmamışsa auth'a atar.
    }

    public function index(){
        return $this->load->view('dashboard/index');
    }
}