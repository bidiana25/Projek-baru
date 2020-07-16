<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Akun extends MY_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('Akun_Model');
	}

	      public function index(){
        $akun=$this->Akun_Model->select_akun();
        #print_r($pengobatan);
               //passing data controller ke view
        $data=array('C_Akun'=> $akun);
        #print_r($data);
               // query memanggil function select_pengobatan di model
                $data['C_Akun'] = $this->Akun_Model->select_akun(); 
                //menampilkan data ke datapengobatan.php yang berisi dari variabel data
               $this->render_backend('daftar_akun', $data); 
  
        }

        public function delete($id)
         {
        $this->Akun_Model->delete($id);
         $this->session->set_flashdata('notif','<div class="alert alert-danger icons-alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="icofont icofont-close-line-circled"></i></button><p><strong>Data Akun Berhasil Dihapus!</strong></p></div>');
       redirect('/C_Akun');
        }


            function tambah(){
              $tipe_akun=$this->input->post("rid_akun1");
              $kode_akun2=$this->input->post("kode_akun2");
              $nama_akun2=$this->input->post("nama_akun2");
              $ket=$this->input->post("ket");

              $data = array('rid_akun1'=>$tipe_akun,
                'kode_akun2'=>$kode_akun2,
                'nama_akun2'=>$nama_akun2,
                'ket'=>$ket);

              $this->Akun_Model->tambah($data);
              
              $this->session->set_flashdata('notif','<div class="alert alert-info icons-alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="icofont icofont-close-line-circled"></i></button><p><strong>Data Akun Berhasil Ditambahkan!</strong></p></div>');
              redirect('C_Akun');
          }

         public function edit_action(){
              $id=$this->input->post("id_akun2");
               $kode_akun2=$this->input->post("kode_akun2");
               $nama_akun2=$this->input->post("nama_akun2");
               $ket=$this->input->post("ket");
               $rid_akun1=$this->input->post("rid_akun1");
               $data=array('kode_akun2'=>$kode_akun2,
                'nama_akun2'=>$nama_akun2,
                'ket'=>$ket,
                'rid_akun1'=>$rid_akun1);
               $this->Akun_Model->update_akun($data,$id);
               $this->session->set_flashdata('notif','<div class="alert alert-info icons-alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="icofont icofont-close-line-circled"></i></button><p><strong>Data Akun Berhasil Diupdate!</strong></p></div>');
               redirect('/C_Akun');
          }

          



}

