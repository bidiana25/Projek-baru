	<?php
 class Akun_Model extends CI_Model{

 	public function select_akun(){
 	$this->db->select('*');
    $this->db->from('t_m_akun2 a'); 
    $this->db->join('t_m_akun1 b', 'a.rid_akun1=b.id_akun1');    
   $akun = $this->db->get ();
    return $akun->result ();
 	}

 	public function select_by_id($id){
 		$this->db->where('id_kamar',$id);
 		return $this->db->get('tblkamar')->row();
 	}

 	function tambah($data){
		    $this->db->insert('t_m_akun2', $data);
		    return TRUE;
		}

 	public function delete($id){
		$this->db->where('id_akun2',$id);
		$this->db->delete('t_m_akun2');
		}

		public function update_akun($data,$id){
 		$this->db->where('id_akun2',$id);
 		return $this->db->update('t_m_akun2',$data);
 	}

 }
?>
