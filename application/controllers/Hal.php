<?php
class Hal extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }

  function index(){
    // $this->load->view('dashboard');
    $this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('kontent/default');
		$this->load->view('template/footer');
  }

  function user_profile(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('template/header');
		  $this->load->view('template/sidebar');
      $this->load->view('kontent/v_user_profile');
      $this->load->view('template/footer');
    }else{
      echo "Restricted";
    }
  }

  function perkara_banding(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('template/header');
		  $this->load->view('template/sidebar');
      $this->load->view('kontent/v_perkara_banding');
      $this->load->view('template/footer');
    }else{
      echo "Restricted";
    }
  }
 
  function hakim(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('template/header');
		  $this->load->view('template/sidebar');
      $this->load->view('kontent/v_hakim');
      $this->load->view('template/footer');
    }else{
      echo "Restricted";
    }
  }
  function hakim4(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('template/header');
		  $this->load->view('template/sidebar');
      $this->load->view('kontent/v_hakim');
      $this->load->view('template/footer');
    }else{
      echo "Restricted";
    }
  }
  function panitera(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('template/header');
		  $this->load->view('template/sidebar');
      $this->load->view('kontent/v_panitera');
      $this->load->view('template/footer');
    }else{
      echo "Restricted";
    }
  }
  function laporan(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('template/header');
		  $this->load->view('template/sidebar');
      $this->load->view('kontent/v_laporan');
      $this->load->view('template/footer');
    }else{
      echo "Restricted";
    }
  }
  function notifikasi(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('template/header');
		  $this->load->view('template/sidebar');
      $this->load->view('kontent/v_notifikasi');
      $this->load->view('template/footer');
    }else{
      echo "Restricted";
    }
  }
  function support(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('template/header');
		  $this->load->view('template/sidebar');
      $this->load->view('kontent/v_support');
      $this->load->view('template/footer');
    }else{
      echo "Restricted";
    }
  }
  function data_pa(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('template/header');
		  $this->load->view('template/sidebar');
      $this->load->view('kontent/v_data_pa');
      $this->load->view('template/footer');
    }else{
      echo "Restricted";
    }
  }
  function parapihak(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('template/header');
		  $this->load->view('template/sidebar');
      $this->load->view('kontent/v_para_pihak');
      $this->load->view('template/footer');
    }else{
      echo "Restricted";
    }
  }
  function data_banding(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('template/header');
		  $this->load->view('template/sidebar');
      $this->load->view('kontent/v_data_banding');
      $this->load->view('template/footer');
    }else{
      echo "Restricted";
    }
  }

}
