<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_mobil extends CI_Controller
{

    public function index()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/data_mobil');
        $this->load->view('template_admin/footer');
    }
}
