<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->requireAdmin();
    }
    public function dashboard() {
        $this->load->view('admin/dashboard');
    }
    public function customers() {
        $this->load->view('admin/customer');
    }
    public function add_customer(){
        $this->load->view('admin/add_customer');
    }
    public function add_customer_post(){
        // Müşteri ekleme işlemleri burada yapılacak. Veritabanında her patronun birden fazla çalışanı veya müşterisi olabilir. 
    }
}