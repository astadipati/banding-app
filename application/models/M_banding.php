<?php
class M_banding extends CI_Model{
	function tampil_banding(){
        $query = $this->db->query("SELECT * FROM `perkara_banding`  
        ORDER BY `perkara_banding`.`perkara_id`  DESC ");
        return $query; 
    } 

    
    function tampil_banding_paging($halaman, $offset){
        return $this->db->query("SELECT * FROM `perkara_banding`  
        ORDER BY `perkara_banding`.`perkara_id`  DESC limit $halaman, $offset");
    }
}
