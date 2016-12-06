<?php
class Siswa {
	private $db;
	
	public function Siswa () {
		$this ->db = new DBClass();
	}
	public function readAllSiswa(){
		$query = " select * from siswa s join nationality n on
		s.id_nationality = n.id_nationality";
		return $this->db->getRows($query);
		
	}
	public function readSiswa ($id){
		$query = " select * from siswa s join nationality n on
		s.id_nationality = n.id_nationality where id_siswa=".$id;
		return $this->db->getRows($query);
		
	}

	public function updateSiswa ($id, $data){
		$name = $data['input_name'];
		$email =$data ['input_email'];
		$nation = $data ['input_nationality'];
		$foto = $data ['foto'];
		
		$query ="update siswa set full_name='$name' , email='$email', foto='$foto";
		if($nation>0) $query.=",id_nationality='$nation'";
		$query.= " where id_siswa=$d";
		$this-> db-> putRows($query);
	}
	public function deleteSiswa($id){
		s
	}
		
		
	}


?>
