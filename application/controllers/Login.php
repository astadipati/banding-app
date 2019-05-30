<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_login');
	}

	function index(){
		$this->load->view('login/login');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_admin=$this->M_login->login_admin($username,$password);

        if($cek_admin->num_rows() > 0){ //jika login sebagai dosen
				$data=$cek_admin->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level']=='1'){ //Akses admin
		            $this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_id',$data['nip']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('hal');

		         }else{ //akses user
		            $this->session->set_userdata('akses','2');
					$this->session->set_userdata('ses_id',$data['nip']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('hal');
		         }

        }else{ //jika login sebagai mahasiswa
		// 			$cek_mahasiswa=$this->login_model->auth_mahasiswa($username,$password);
		// 			if($cek_mahasiswa->num_rows() > 0){
		// 					$data=$cek_mahasiswa->row_array();
        // 			$this->session->set_userdata('masuk',TRUE);
		// 					$this->session->set_userdata('akses','3');
		// 					$this->session->set_userdata('ses_id',$data['nim']);
		// 					$this->session->set_userdata('ses_nama',$data['nama']);
		// 					redirect('page');
		// 			}else{  // jika username dan password tidak ditemukan atau salah
		// 					$url=base_url();
		// 					echo $this->session->set_flashdata('msg','Username Atau Password Salah');
		// 					redirect($url);
		// 			}
			$url=base_url('');
			redirect($url);
		}
		
    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }

}
