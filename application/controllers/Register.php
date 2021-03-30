<?php

class Register extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('email');
    }

    public function index()
    {

        $this->form_validation->set_rules('nama_lengkap', 'Nama_lengkap', 'required|trim',['required' => '* Nama tidak boleh kosong']);
        $this->form_validation->set_rules('nomor_handphone', 'Nomor_handphone', 'required|trim|regex_match[/^[0-9]/]|max_length[12]|min_length[10]', ['required' => '* Nomor handphone tidak boleh kosong','regex_match' => '* Nomor handphone harus berupa angka!','min_length' => '* Nomor handphone terlalu pendek!', 'max_length' => '* Nomor handphone terlalu panjang!']);
        $this->form_validation->set_rules('email','Email','required|trim|valid_email',['required' => '* Email tidak boleh kosong','valid_email' => '* Email yang anda masukan salah , Silahkan periksa kembali!']);  
        $this->form_validation->set_rules('alamat_lengkap', 'Alamat_lengkap', 'required|trim',['required' => '* Alamat tidak boleh kosong']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]',['min_length' => '* Password terlalu pendek', 'required' => '* Password tidak boleh kosong']);

        if( $this->form_validation->run() == false){

            $data['title'] = 'Selamat Datang';
            $this->load->view('templates/account_header',$data);
            $this->load->view('account/register');
            $this->load->view('templates/account_footer');

        } else {

            $data = [
                'name' => $this->input->post('nama_lengkap',true),
                'phone' => $this->input->post('nomor_handphone',true),
                'email' => $this->input->post('email',true),
                'address' => $this->input->post('alamat_lengkap',true),
                'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                'images' => 'default.svg',
                'point' => 0, 'role_id' => 1, 'is_active' => 1
            ];

            $this->db->insert('user', $data);

            $this->session->set_flashdata('message', 
            '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Selamat!</strong> Akun anda sudah berhasil di daftarkan.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>');
            
            redirect('login');
        }
    }
}