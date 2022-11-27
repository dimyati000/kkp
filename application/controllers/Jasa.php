<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jasa extends CI_Controller{

    public function perpajakan(){
        $data['title'] = "Perpajakan | Kantor Konsultan Pajak dan Hukum";
        $data['konten'] = "perpajakan.php";    

        $this->load->view('halaman-klien/tema-klien.php', $data);
    }
}

?>