<?php

class Main extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('User_model');
    }
    public function index()
    {
        $data['title'] = "Akun";
        $data['user'] = $this->User_model->index();
        $this->load->view('templates/main_header',$data);
        $this->load->view('main/index',$data);
        $this->load->view('templates/main_footer');
    }
}