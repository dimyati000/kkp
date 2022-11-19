<?php

class Dashboard extends CI_Controller{

    public function index(){
        $this->load->view('template/header-admin');
        $this->load->view('admin/dashboard');
        $this->load->view('template/footer-admin');
    }
}

?>