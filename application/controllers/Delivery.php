<?php

class Delivery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_model');
        $this->load->helper('form');
        
    }
    
    public function index()
    {
        
        $this->form_validation->set_rules('nm_penerima','Nm_penerima','required|trim',
        ['required' => '* Nama penerima masih kosong!']);
        $this->form_validation->set_rules('hp_penerima','Hp_penerima','required|trim|regex_match[/^[0-9]/]|min_length[10]|max_length[13]',
        ['required' => '* Nomor handphone penerima masih kosong!', 'regex_match' => '* Format yang anda masukan salah, nomor  handphone harus berupa angka!',
        'min_legth' => '* Nomor yang anda masukan terlalu pendek!', 'max_length' => '* Nomor yang anda masukan terlalu panjang!']);
        $this->form_validation->set_rules('al_penerima','Al_penerima','required|trim',
        ['required' => '* Alamat penerima paket masih kosong!']);
        $this->form_validation->set_rules('transaksi','Transaksi','required|trim',
        ['required' => '* Type transaksi belum ditentukan!']);
        $this->form_validation->set_rules('harga','Harga','required|trim',
        ['required' => '* Harga barang masih kosong!']);

        if($this->form_validation->run() == false)
        {
            $data['title'] = 'Halaman Pengiriman';
            $data['user'] = $this->User_model->index();
            $this->load->view('templates/main_header',$data);
            $this->load->view('delivery/index');
            $this->load->view('templates/main_footer');

        }else{
            $this->_process();
        }
    }

    private function _process()
    {
       
        $data = 
        [
            'receiver' => $this->input->post('nm_penerima',true),
            'receiver_address' => $this->input->post('al_penerima',true),
            'receiver_phone' => $this->input->post('hp_penerima',true),
            'role_cod' => $this->input->post('transaksi'),
            'pkg_price' => $this->input->post('harga',true)
        ];

        $this->db->insert('transaction',$data);
    }

    public function cost()
    {   
        $this->form_validation->set_rules('penjemputan', 'Penjemputan', 'required|trim',['required' => '* Alamat penjemputan tidak boleh kosong']);
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'required|trim',['required' => '* Alamat tujuan tidak boleh kosong']);
        $this->form_validation->set_rules('select', 'Select', 'required|trim',['required' => '* Berat paket belum ditentukan!']);

        $weight = $this->input->post('select');
        $cost = 0;

        if($weight == "Kurang dari 5 Kg")
        {
            $cost = 10000;
        } else if($weight == "Dari 5 s/d 10 Kg")
        {
            $cost = 15000;
        }else if ($weight == "Lebih dari 10 Kg")
        {
            $cost = 25000;
        }

        if( $this->form_validation->run() == false){

        $data['title'] = 'Cek Ongkir';
        $data['cost'] = $cost;

        $this->load->view('templates/main_header',$data);
        $this->load->view('delivery/cost');
        $this->load->view('templates/main_footer');

        } else {

            $data['title'] = 'Cek Ongkir';
            $data['cost'] = $cost;
    
            $this->load->view('templates/main_header',$data);
            $this->load->view('delivery/cost');
            $this->load->view('templates/main_footer');

        }

    }
}
