<?php 

	class EditJadwal extends CI_Model{
		public function get_jadwal($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->get('jadwal');
			return $query->result();
		}

		public function delete_jadwal($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('jadwal');
		}
	public function edit_jadwal($data, $id)
		{
			

			$profile= array(
					'id' => $this->session->userdata('id'),
					
					"nama_matkul"=>$_POST['matkul'],
            		"jam"=>$_POST['jam'],
            		"ruangan"=>$_POST['ruangan'],
            		"kelas"=>$_POST['kelas'],
            		"kode_matkul"=>$_POST['kodem'],
            		"hari"=>$_POST['hari'],
            		"status"=>$_POST['status']
			);

			$this->db->where('id', $id);
			$this->db->update('jadwal', $profile);
		}	
	}
?>