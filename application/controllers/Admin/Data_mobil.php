<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_mobil extends CI_Controller
{

    public function index()
    {
        $data['mobil'] = $this->Rental_model->get_data('mobil')->result();
        $data['type'] = $this->Rental_model->get_data('type')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/data_mobil', $data);
        $this->load->view('template_admin/footer');
    }
}
