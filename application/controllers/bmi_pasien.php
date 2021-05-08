<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pasien extends CI_Controller {
    public function index()
    {
        $this->load->model('bmipasien_model','bmipasien1');
        $this->bmipasien1->id=1;
        $this->bmipasien1->kode='010001';
        $this->bmipasien1->tanggal='2021-04-11';
        $this->bmipasien1->nama='Faiz Fikri';
        $this->bmipasien1->tmp_lahir='Jakarta';
        $this->bmipasien1->tgl_lahir='03-05-2001';
        $this->bmipasien1->gender='L';
        $this->bmipasien1->berat='64.2';
        $this->bmipasien1->tinggi='169';
        $this->load->model('bmipasien_model','bmipasien2');
        $this->bmipasien2->id=2;
        $this->bmipasien2->kode='020001';
        $this->bmipasien2->tanggal='2021-04-12';
        $this->bmipasien2->nama='Pandan Wangi';
        $this->bmipasien2->tmp_lahir='Jakarta';
        $this->bmipasien2->tgl_lahir='20-10-2000';
        $this->bmipasien2->gender='P';
        $this->bmipasien2->berat='40.2';
        $this->bmipasien2->tinggi='152';
        $this->load->model('bmipasien_model','bmipasien3');
        $this->bmipasien3->id=3;
        $this->bmipasien3->kode='010002';
        $this->bmipasien3->tanggal='2021-04-12';
        $this->bmipasien3->nama='Faiz Fikri';
        $this->bmipasien3->tmp_lahir='Bogor';
        $this->bmipasien3->tgl_lahir='22-12-1970';
        $this->bmipasien3->gender='L';
        $this->bmipasien3->berat='90.8';
        $this->bmipasien3->tinggi='159';
        $bmi_pasien = [$this->bmipasien1, $this->bmipasien2, $this->bmipasien3];
        $data['bmi_pasien']=$bmi_pasien;
        $this->load->view('header');
        $this->load->view('pasien/index',$data);
        $this->load->view('footer');
    }
}