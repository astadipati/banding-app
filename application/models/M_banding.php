<?php
class M_banding extends CI_Model{

    // buat paging
    
	function tampil_banding(){
        $query = $this->db->query("SELECT * FROM `perkara_banding`  
        ORDER BY `perkara_banding`.`perkara_id`  DESC ");
        return $query; 
    } 

    function tampil_banding_paging($halaman, $offset){
        return $this->db->query("SELECT * FROM `perkara_banding`  
        ORDER BY `perkara_banding`.`perkara_id`  DESC limit $halaman, $offset");
    } 

    // buat data hakim
	function tampil_hakim(){
        $query = $this->db->query("SELECT * FROM `hakim_pt`  
        ORDER BY `hakim_pt`.`id`  DESC ");
        return $query; 
    } 

    function tampil_hakim_paging($halaman, $offset){
        return $this->db->query("SELECT * FROM `hakim_pt`  
        ORDER BY `hakim_pt`.`id`  DESC limit $halaman, $offset");
    }

    // buat data pp
	function tampil_pp(){
        $query = $this->db->query("SELECT * FROM `panitera_pt`  
        ORDER BY `panitera_pt`.`id`  DESC ");
        return $query; 
    } 

    function tampil_pp_paging($halaman, $offset){
        return $this->db->query("SELECT * FROM `panitera_pt`  
        ORDER BY `panitera_pt`.`id`  DESC limit $halaman, $offset");
    } 

    // end paging

    function hakim_auto($title){
        $this->db->like('nama_gelar', $title);
        $this->db->where('aktif','Y');
		$this->db->order_by('nama_gelar', 'ASC');
		// $this->db->limit(10);
		return $this->db->get('hakim_pt')->result();
	}
    
    function pp_auto($data){
        $this->db->like('nama_gelar', $data);
        // $this->db->where('aktif','Y');
		$this->db->order_by('nama_gelar', 'ASC');
		// $this->db->limit(10);
		return $this->db->get('panitera_pt')->result();
	}

}
