<?php
class Hal extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('M_banding');
    // $this->load->library('encryption');
    $this->load->library('encrypt');
    // $this->encryption->initialize(
    //   array(
    //     'cipher' => 'aes-256',
    //     'mode' => 'ctr',
    //     'key' => $this->config->config['encryption_key']
    //   )
    // );
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
  // data banding
  function data_banding(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->library('pagination');
      $config['base_url'] = base_url().'/hal/data_banding/';
      $config['total_rows'] = $this->M_banding->tampil_banding()->num_rows(); 
      $data['total'] = $this->M_banding->tampil_banding()->num_rows(); 
      $config['per_page'] = 10;
      $this->pagination->initialize($config);
      $data['paging']     = $this->pagination->create_links();
      $halaman            = $this->uri->segment(3);
      $halaman            = $halaman ==''?0:$halaman;
      $data ['data']  = $this->M_banding->tampil_banding_paging($halaman,  $config['per_page']);
      $this->load->view('template/header');
		  $this->load->view('template/sidebar');
      $this->load->view('kontent/v_data_banding', $data);
      $this->load->view('template/footer');
    }else{
      echo "Restricted";
    }
  }
  
  function dbedit(){ 
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      
          if (isset($_POST['submit'])){
               $uploadFoto = $this->upload_foto();
               $this->M_banding->update($uploadFoto);
               redirect('hal/data_banding');
          }else{

            $param1 = '123456';
            
            // $var_dec = $this->encrypt->decode($var_enc);
            $var_enc = $this->encrypt->encode($param1);
            $var_dec = $this->encrypt->decode($var_enc);

            // echo "Data enc: ".$var_enc."<br/>";
            // echo "Data Dec: ".$var_dec;
            // echo "hasil enc: ".$var_enc."<br/>";
            // echo "hasil dec: ".$var_dec."<br/>";

            $urienc           = $this->uri->segment(3);
            // $uridec  = $this->encryption->decrypt($urienc);
            $uridec  = $this->encrypt->decode($urienc);
              //  echo "Decrypt: ".$uridec;
              //  die();

               $data['data'] = $this->db->get_where('perkara_banding',array ('perkara_id'=>$uridec))->row_array();
               $this->load->view('template/header');
               $this->load->view('template/sidebar');
               $this->load->view('kontent/v_data_banding_edit', $data);
               $this->load->view('template/footer');
          }
      
    }else{
      echo "Restricted";
    }
  
}

}
