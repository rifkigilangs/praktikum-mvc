<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bmi extends CI_Controller {

    public function index()
	{
        $this->load->model('bmi_model','bmi1');
        $this->bmi1->berat=64.2;
        $this->bmi1->tinggi=169;
        $this->load->model('bmi_model','bmi2');
        $this->bmi2->berat=40.2;
        $this->bmi2->tinggi=152;
        $this->load->model('bmi_model','bmi3');
        $this->bmi3->berat=90.8;
        $this->bmi3->tinggi=159;
        $list_bmi = [$this->bmi1, $this->bmi2, $this->bmi3];
        $data['list_bmi']=$list_bmi;
        $this->load->view('header');
		$this->load->view('bmi/index',$data);
        $this->load->view('footer');
        
	}
}