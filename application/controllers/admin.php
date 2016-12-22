<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('isLogin') == FALSE) {
            //kembali ke login
            redirect('login');
        }
        //load model
        $this->load->model('m_login');
        $this->load->model('m_admin');
        $this->load->model('m_arsip');
       // $this->load->libraries('m_admin');
    }

    public function index() {
        $user = $this->session->userdata('username');
        $data['pengguna'] = $this->m_login->get_user($user);
        $data['chart1'] = $this->m_admin->get_chart1();
       
        // die($data['chart1']);
        $this->load->view('themes/header', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('themes/footer');
    }

    public function profile() {
        $user = $this->session->userdata('username');
        $peng['pengguna'] = $this->m_login->get_user($user);
        $data['profile'] = $this->m_admin->get_admin($user);
        $this->load->view('themes/header', $peng);
        $this->load->view('profile', $data);
        $this->load->view('themes/footer');
    }

    public function update_admin() {
        
        
            $id = $this->input->post('id');
            $data = array(
                'userNama' => $this->input->post('username'),
                'userNamaLengkap' => $this->input->post('fullname'),
                'userPass' => md5($this->input->post('password'))
                
            );
            $execute = $this->m_admin->update_admin($id, $data);
            if($execute){
                $this->session->set_flashdata('success','Data berhasil di edit');
                 redirect($_SERVER['HTTP_REFERER'], 'refresh');
            //redirect('admin/profile');
        
    }

}
}
