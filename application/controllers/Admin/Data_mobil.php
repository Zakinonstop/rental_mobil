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

    public function tambahDataMobil()
    {
        $data['type'] = $this->Rental_model->get_data('type')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/formTambahMobil', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambahMobilAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->tambahDataMobil();
        } else {
            $kode_type = $this->input->post('kode_type');
            $merk = $this->input->post('merk');
            $no_plat = $this->input->post('no_plat');
            $warna = $this->input->post('warna');
            $tahun = $this->input->post('tahun');
            $status = $this->input->post('status');
            $gambar = $_FILES['gambar']['name'];
            if ($gambar = '') {
            } else {
                $config['upload_path'] = './assets/upload';
                $config['allowed_types'] = 'jpg|png|jpeg|tiff';

                $this->load->library('upload', $config);
                // $this->load->initialize($config);
                if (!$this->upload->do_upload('gambar')) {
                    echo "gambar tidak di temukan / barang ghoib !";
                } else {
                    $gambar = $this->upload->data('file_name');
                }

                $data = array(
                    'kode_type' => $kode_type,
                    'merk' => $merk,
                    'no_plat' => $no_plat,
                    'tahun' => $tahun,
                    'warna' => $warna,
                    'status' => $status,
                    'gambar' => $gambar
                );
            }

            $this->Rental_model->insert_data('mobil', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">
            Data Berhasil Ditambahkan !
          </div>');
            redirect('admin/data_mobil');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_type', 'Kode Type', 'required');
    }
}
