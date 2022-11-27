<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Klien extends CI_Controller{

    public function index(){
        $data['title'] = "Home | Kantor Konsultan Pajak dan Hukum";
        $data['konten'] = "home-klien.php";    

        $this->load->view('halaman-klien/tema-klien.php', $data);
    }

    public function about(){
        $data['title'] = "About | Kantor Konsultan Pajak dan Hukum";
        $data['konten'] = "about-klien.php";    

        $this->load->view('halaman-klien/tema-klien.php', $data);
    }
}

?>