<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        

        
    }
    public function index()
    {
        $this->form_validation->set_rules('handphone','Handphone','required|trim|regex_match[/^[0-9]/] |min_length[10] |max_length[13]',
        ['required' => '* Masukan nomor handphone anda',
        'regex_match' => '* Nomor handphone yang anda masukan salah, silahkan periksa kembali',
        'min_length' => '* Nomor terlalu pendek',
        'max_length' => '* Nomor terlalu panjang']);
        $this->form_validation->set_rules('password','Password','required|trim',['required' => '* Password tidak boleh kosong!']);

        if($this->form_validation->run() == false)
        {
            $data['title'] = "Halaman Login";
            $this->load->view('templates/account_header',$data);
            $this->load->view('account/login');
            $this->load->view('templates/account_footer');
        } else {

            $this->_login();

        }

    }

    private function _login()
    {
        $handphone = $this->input->post('handphone');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['phone' => $handphone])->row_array();

        if($user)
        {
            if($user['is_active'] == 1){

                if(password_verify($password, $user['password'])){
                    $data = [
                        'phone' => $user['phone ']
                    ];

                    $this->session->set_userdata($data);

                    redirect('delivery');

                }else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger d-flex justify-content-center" role="alert">
           Password yang anda masukan salah!</div>');
            redirect('login');
                }
            } 
        }else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger d-flex justify-content-center" role="alert">
               Nomor handphone yang anda masukan tidak terdaftar!</div>');
                redirect('login');
            }
        
    }
}