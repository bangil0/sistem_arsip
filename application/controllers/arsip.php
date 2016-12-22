<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Arsip extends CI_Controller {

	public function __construct() {
        parent::__construct();
        if($this->session->userdata('isLogin') == FALSE)
        {
            //kembali ke login
            redirect('login');
        }
            //load model
        $this->load->model('m_login');
                        //load barang
        $this->load->model('m_arsip');
        $this->load->model('m_laporan');
        $this->load->helper('tglindo_helper');


    }
    public function index() {
        $user = $this->session->userdata('username');
        $data_user['pengguna'] = $this->m_login->get_user($user); 
        $data['data_arsip']=$this->m_arsip->arsip_show();

        // echo "<pre>";
        // print_r($data['data_arsip']);
        // die();
       //$data_user['active'] = 'active';

        // $query = array(

        //    //'subjek' => $this->m_arsip->get_subjek()
        //    );

        $this->load->view('themes/header',$data_user);
        $this->load->view('arsip', $data);
        $this->load->view('themes/footer');


    }  

        //ini contoh conrtoller more drive
    //     function more($almNIU){
    //     $data['hasil']=$this->m_alumni->more($almNIU);
    //     $this->load->view('web/more',$data);
    // }

    public function arsip_detil() {
        $user = $this->session->userdata('username');
        $peng['pengguna'] = $this->m_login->get_user($user);

        $id = $this->uri->segment(3);

        $data['hasil']=$this->m_arsip->arsipdetil($id);
        $data['riwayat'] = $this->m_arsip->riwayat($id);
        $data['lampiran']=$this->m_arsip->lampiran($id);
        
        $this->load->view('themes/header', $peng);
        $this->load->view('arsip_detil',$data);
        $this->load->view('themes/footer');    
    }    
 

    public function delete(){
        $id = $this->uri->segment(3);
        $hide = $this->m_arsip->arsip_hide($id);
        if ($hide) {
                    $this->session->set_flashdata('success','Data berhasil di hapus');
                    redirect('arsip');       

                }
                else {
                     $this->session->set_flashdata('error','Data gagal di hapus');
                    redirect('arsip');    
    }
    }


     public function upload()
        {
        $user = $this->session->userdata('username');

        $tgl = date("Y-m-d");
        // print_r($data);
        // die();

            //$id =  $this->uri->segment(3);
        $id = $this->input->post('id_arsip');
        $data = array(

           $this->input->post('subjek'),   
          $this->input->post('deskripsi'), 
            $this->input->post('tgl_kegiatan'),
          $this->input->post('id')    
          //s'lampiran' => $this->input->post('lampiran'),     
          );

            $execute = $this->m_arsip->update_arsip($data);
           // die();
            // update tabel arsip.
            
            if($execute){

            $result = array();
            $result2 = array();

            $ext = array('application/pdf','image/jpeg', 'image/gif', 
                'application/x-rar-compressed', 'application/x-zip', 
                'application/vnd.ms-excel', 'application/vnd.ms-powerpoint', 
                'application/octet-stream', 'audio/mp3', 'image/png', 
                'image/x-png', 'video/quicktime', 'video/x-sgi-movie', 
                'application/msword', 'application/rar', 'video/x-msvideo', 
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                'application/x-zip-compressed');
             //file type 

            $size = 1000000; //1000 kb = 1 mb//ukuran file
            $targetUpload = $_SERVER['DOCUMENT_ROOT']."/sistem-arsip-master/lampiran/";

            $idLampiran['id'] =$this->input->post('id_lampiran');
            $lampiran = $_FILES['lampiran']; //update blm d merge
            $lampirand['lampirans'] = $_FILES['lampirans']; //insert
            // echo "<pre>";
            // print_r($lampirand['lampirans']);
            // die();
            $lampirans['lampiran'] = array_merge($idLampiran, $lampiran); //update udh d merge

            
            

            foreach ($lampirans['lampiran']['name'] as $key => $value) {
                
                    if($lampirans['lampiran']['name'][$key] == '') {

                        continue;
                    }

                    if(!in_array($lampirans['lampiran']['type'][$key], $ext)) {

                            $this->session->set_flashdata('errortype', 'Tipe file salah');
                           redirect($_SERVER['HTTP_REFERER'], 'refresh');
                            } else {

                        if($lampirans['lampiran']['size'][$key] > $size) {

                            $this->session->set_flashdata('errorsize', 'Ukuran file maksimal 1024 Kb atau 1 Mb');
                           redirect($_SERVER['HTTP_REFERER'], 'refresh');

                        } else {
                            // echo $targetUpload;
                            // echo "<br>";
                            // print_r($lampirans['lampiran']['tmp_name'][$key]);
                            // echo "<br>";
                            // echo $targetUpload.''.$lampirans['lampiran']['name'][$key];
                            // die();
                             move_uploaded_file($lampirans['lampiran']['tmp_name'][$key], "$targetUpload{$lampirans['lampiran']['name'][$key]}");

                        }

                    }

                     $result[] = array(

                        //ketika ada update akan eksekusi ini. 
                        'nama_file' => $lampirans['lampiran']['name'][$key],
                        'id_arsip' => $this->input->post('id'),
                        'id_lampiran' => $lampirans['lampiran']['id'][$key],
                        );

            }

               if(!empty($result)) {

                    $la = $this->db->update_batch('lampiran', $result, 'id_lampiran');

               }
            
            //insert lampiran baru

            foreach ($lampirand['lampirans']['name'] as $key => $value) {
                        

                    if($lampirand['lampirans']['name'][$key] == '') {

                        continue;

                    }

                    

                    if(!in_array($lampirand['lampirans']['type'][$key], $ext)) {

                            $this->session->set_flashdata('errortype', 'Tipe file salah');
                            redirect($_SERVER['HTTP_REFERER'], 'refresh');
                            } else {

                        if($lampirand['lampirans']['size'][$key] > $size) {

                            $this->session->set_flashdata('errorsize', 'Ukuran file maksimal 1024 Kb atau 1 Mb');
                           redirect($_SERVER['HTTP_REFERER'], 'refresh');

                        } else {

                            // echo $targetUpload;
                            // echo $lampirand['lampirans']['tmp_name'][$key];
                            // echo $targetUpload{$lampirans['lampiran']['name'][$key]};
                            // echo "$targetUpload{$lampirand['lampirans']['name'][$key]}";
                            // die();
                             move_uploaded_file($lampirand['lampirans']['tmp_name'][$key], "$targetUpload{$lampirand['lampirans']['name'][$key]}");

                        }

                    }

                    
                     $result2[] = array(

                        //ketika update dan kemudian menambahkan file lagi maka
                        
                         'nama_file' => $lampirand['lampirans']['name'][$key],
                         'id_arsip' =>$this->input->post('id'),
                        );

                     //die();
                     // echo "<pre>";
                     // print_r($result2);
                     // die();
            }

             if(!empty($result2)) {

                    $la = $this->db->insert_batch('lampiran', $result2);

               }

               // insert riwayat edit 

               $result3 = array(

                        
                        'id_arsip' => $this->input->post('id'),
                        'userId' => $this->session->userdata('userId'),
                        'tgl_edit' => date("Y-m-d H:i:s")

                );

               //function nya untuk insert ke riwayat edit
               $ini = $this->m_arsip->insertSync3($result3);
               //die();
              //redirect($_SERVER['HTTP_REFERER'], 'refresh');
               if ($ini) {

                    $this->session->set_flashdata('success','Data berhasil di edit');
                    redirect($_SERVER['HTTP_REFERER'], 'refresh');
                    //redirect('arsip');

                }
                else {
                     $this->session->set_flashdata('error','Data gagal di edit');
                     redirect($_SERVER['HTTP_REFERER'], 'refresh');
                    //redirect('arsip');       

                }
        }

        
        }  


    function cetak_detil($id)
    {
        
        define('FPDF_FONTPATH', $this->config->item('fonts_path'));


        $this->load->model('m_arsip');
        //$id = $this->uri->segment(3);
        $data['record']=$this->m_arsip->arsipdetil($id);



        
        $this->load->view('cetak_detail', $data);

    }

         function insertSync()
        {
          

            $data = array(
                $this->input->post('tgl_kegiatan'),
                $this->input->post('subjek'),
                $this->input->post('deskripsi'),
                date('Y-m-d H:i:s'),
                $this->session->userdata('userId'),
                );
            
            $arsip= $this->m_arsip->insertSync($data);
            if($arsip){
                $id = $this->db->insert_id();
                $config['upload_path'] = './lampiran';
                $config['size'] = 1000000;
                $config['allowed_types'] = 'gif|jpg|txt|png|jpeg|pdf|zip|rar|word|doc|docx|ppt|xls|xlsx|avi|mov|movie|mp3';
                $this->load->library('upload',$config);

                foreach ($_FILES as $key => $val) {   
                    if(!empty($val['name'])){
                        if (!$this->upload->do_upload($key)){
                            echo $this->upload->display_errors();
                        } 
                        else {
                            $result = array(
                                $id,
                                'nama_file' => $val['name']
                                );
                            $lampiran = $this->m_arsip->insertSync2($result);
                        }
                    }                
                }
                if ($lampiran) {

                    $this->session->set_flashdata('success','Data berhasil tersimpan');
                    redirect('arsip');

                }
                else {
                     $this->session->set_flashdata('error','Data gagal tersimpan');
                    redirect('arsip');       

                }

                         
                }

        }

    
    
    }