<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $this->load->view('template_customer/header');
        $this->load->view('customer/dashboard');
        $this->load->view('template_customer/footer');
    }
}
