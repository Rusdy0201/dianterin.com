<?php

class Forgot_pass extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Lupa Password!";
        $this->load->view('templates/account_header',$data);
        $this->load->view('account/forgot_pass');
        $this->load->view('templates/account_footer');
    }
}