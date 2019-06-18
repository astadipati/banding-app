<?php
class Hal extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('M_banding');

    $temp = 345;
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
      $this->load->library('pagination');
      $config['base_url'] = base_url().'/hal/hakim/';
      $config['total_rows'] = $this->M_banding->tampil_hakim()->num_rows(); 
      $data['total'] = $this->M_banding->tampil_hakim()->num_rows(); 
      $config['per_page'] = 10;
      $this->pagination->initialize($config);
      $data['paging']     = $this->pagination->create_links();
      $halaman            = $this->uri->segment(3);
      $halaman            = $halaman ==''?0:$halaman;
      $data ['data']  = $this->M_banding->tampil_hakim_paging($halaman,  $config['per_page']);
      $this->load->view('template/header');
		  $this->load->view('template/sidebar');
      $this->load->view('kontent/v_hakim', $data);
      $this->load->view('template/footer');
    }else{
      echo "Restricted";
    }
  }
  function hakim_pa(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){

      $this->load->library('pagination');
      $config['base_url'] = base_url().'/hal/hakim_pa/';
      $config['total_rows'] = $this->M_banding->tampil_hakim_pa()->num_rows(); 
      $data['total'] = $this->M_banding->tampil_hakim_pa()->num_rows(); 
      $config['per_page'] = 10;
      $this->pagination->initialize($config);
      $data['paging']     = $this->pagination->create_links();
      $halaman            = $this->uri->segment(3);
      $halaman            = $halaman ==''?0:$halaman;
      $data ['data']  = $this->M_banding->tampil_hakim_pa_paging($halaman,  $config['per_page']);
      $this->load->view('template/header');
		  $this->load->view('template/sidebar');
      $this->load->view('kontent/v_hakim_pa', $data);
      $this->load->view('template/footer');
    }else{
      echo "Restricted";
    }
  }
  function panitera(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->library('pagination');
      $config['base_url'] = base_url().'/hal/panitera/';
      $config['total_rows'] = $this->M_banding->tampil_pp()->num_rows(); 
      $data['total'] = $this->M_banding->tampil_pp()->num_rows(); 
      $config['per_page'] = 10;
      $this->pagination->initialize($config);
      $data['paging']     = $this->pagination->create_links();
      $halaman            = $this->uri->segment(3);
      $halaman            = $halaman ==''?0:$halaman;
      $data ['data']  = $this->M_banding->tampil_pp_paging($halaman,  $config['per_page']);
      $this->load->view('template/header');
		  $this->load->view('template/sidebar');
      $this->load->view('kontent/v_panitera', $data);
      $this->load->view('template/footer');
    }else{
      echo "Restricted";
    }
  }
  function panitera_pa(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->library('pagination');
      $config['base_url'] = base_url().'/hal/panitera_pa/';
      $config['total_rows'] = $this->M_banding->tampil_pp_pa()->num_rows(); 
      $data['total'] = $this->M_banding->tampil_pp_pa()->num_rows(); 
      $config['per_page'] = 10;
      $this->pagination->initialize($config);
      $data['paging']     = $this->pagination->create_links();
      $halaman            = $this->uri->segment(3);
      $halaman            = $halaman ==''?0:$halaman;
      $data ['data']  = $this->M_banding->tampil_pp_pa_paging($halaman,  $config['per_page']);
      $this->load->view('template/header');
		  $this->load->view('template/sidebar');
      $this->load->view('kontent/v_panitera_pa', $data);
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
          
          }else if(isset($_GET['term'])){
             
              $result = $this->M_banding->hakim_auto($_GET['term']);
              // $result = $this->M_banding->pp_auto($_GET['term']);
              if (count($result) > 0) {
                foreach ($result as $row)
                $arr_result[] =  $row->nama_gelar;
                echo json_encode($arr_result);
              }
              
            }else{
            
            $uri          = $this->uri->segment(3);
            $enc = $this->encrypt->encode($uri);
            // echo $enc; echo "<br><hr>";
            $len = strlen($uri);
            $dataenc = str_replace(array('+','/','='),array('-','_',''),$len);
            $key = 123665765775765867576578658575875767;
            $res1 = base64_encode($dataenc);
            // echo $res1; echo "<br><hr>";


            // die();
            
            $dec = $this->encrypt->decode($uri);
            // echo $dec; echo "<br>";
            $res = base64_decode($uri);
            // echo $uri; echo "<br>";
            // echo $dec; echo "<br>";
            // $result = base64_decode($res);
            // echo $result;
            // die();
            // $uridec  = $this->encrypt->decode($urienc);
            $data['data'] = $this->db->get_where('perkara_banding',array ('perkara_id'=>$res))->row_array();
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
