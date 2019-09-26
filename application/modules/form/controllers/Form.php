<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // load database
        $this->load->model('m_form');
        if ($this->session->userdata('level') != "user") {
            //$this->session->sess_destroy();
            /*$message = "Anda telah login sebagai ".$this->session->userdata('level');
            echo "<script type='text/javascript'>alert('$message');</script>";*/
            redirect('', 'refresh');
        }
    }
    
    public function index()
    {
        $data['title']             = 'Form Kepuasan Pelanggan';
        $data['pertanyaan']        = $this->m_form->getPertanyaan();
        $data['jumlah_pertanyaan'] = $this->m_form->getJumlahPertanyaan();
        $data['jawaban']           = $this->m_form->getJawaban();
        
        $this->load->view('v_form', $data);
    }
    
    public function submit()
    {
        $id_survei = $this->keygen(7);
        $iduptd    = $this->session->userdata('id_uptd');
        $date      = date('Y-m-d');
        
        if ($this->input->post('pekerjaan') != "Lainnya") {
            $pekerjaan = $this->input->post('pekerjaan');
        } else {
            $pekerjaan = $this->input->post('pekerjaan_lainnya');
        }
        $dataWP = array(
            'id_survei' => $id_survei,
            'pendidikan' => $this->input->post('pendidikan'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'usia' => $this->input->post('usia'),
            'pekerjaan' => $pekerjaan,
            'saran' => $this->input->post('kritiksaran'),
            'id_uptd' => $iduptd
        );
        
        $hasilSurvey = array(
            array(
                'id_survei' => $id_survei,
                'id_pertanyaan' => $this->input->post('id_pertanyaan[0]'),
                'id_jawaban' => $this->input->post('id_jawaban[0]'),
                'tgl_survei' => $date
            ),
            array(
                'id_survei' => $id_survei,
                'id_pertanyaan' => $this->input->post('id_pertanyaan[1]'),
                'id_jawaban' => $this->input->post('id_jawaban[1]'),
                'tgl_survei' => $date
            ),
            array(
                'id_survei' => $id_survei,
                'id_pertanyaan' => $this->input->post('id_pertanyaan[2]'),
                'id_jawaban' => $this->input->post('id_jawaban[2]'),
                'tgl_survei' => $date
            ),
            array(
                'id_survei' => $id_survei,
                'id_pertanyaan' => $this->input->post('id_pertanyaan[3]'),
                'id_jawaban' => $this->input->post('id_jawaban[3]'),
                'tgl_survei' => $date
            ),
            array(
                'id_survei' => $id_survei,
                'id_pertanyaan' => $this->input->post('id_pertanyaan[4]'),
                'id_jawaban' => $this->input->post('id_jawaban[4]'),
                'tgl_survei' => $date
            ),
            array(
                'id_survei' => $id_survei,
                'id_pertanyaan' => $this->input->post('id_pertanyaan[5]'),
                'id_jawaban' => $this->input->post('id_jawaban[5]'),
                'tgl_survei' => $date
            ),
            array(
                'id_survei' => $id_survei,
                'id_pertanyaan' => $this->input->post('id_pertanyaan[6]'),
                'id_jawaban' => $this->input->post('id_jawaban[6]'),
                'tgl_survei' => $date
            ),
            array(
                'id_survei' => $id_survei,
                'id_pertanyaan' => $this->input->post('id_pertanyaan[7]'),
                'id_jawaban' => $this->input->post('id_jawaban[7]'),
                'tgl_survei' => $date
            ),
            array(
                'id_survei' => $id_survei,
                'id_pertanyaan' => $this->input->post('id_pertanyaan[8]'),
                'id_jawaban' => $this->input->post('id_jawaban[8]'),
                'tgl_survei' => $date
            )
        );
        
        $this->m_form->saveHasil($dataWP, $hasilSurvey);
        
        redirect('form/');
        
    }
    
    public function keygen($panjang)
    {
        $karakter = '123456789';
        $string   = '';
        for ($i = 0; $i < $panjang; $i++) {
            $pos = rand(0, strlen($karakter) - 1);
            $string .= $karakter{$pos};
        }
        return $string;
    }
}

?>