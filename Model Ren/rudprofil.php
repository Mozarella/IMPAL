<?php 

	class EditUser extends CI_Model{
		public function get_user_profil($id)
		{
			$this->db->where('user_id', $id);
			$query = $this->db->get('user');
			return $query->result();
		}

		public function delete_profil($id)
		{
			$this->db->where('user_id', $id);
			$this->db->delete('user');
		}
public function edit_profil($data, $id)
		{
			

			$profile= array(
					'user_id' => $this->session->userdata('user_id'),
					
					'nama_lengkap' => $_POST['nama_lgkp'],
					'jenis_kelamin' => $_POST['gender'],
					'no_telpon' => $_POST['telfon']
					'alamat ' => $_POST['alamat'],
					'user_email' => $_POST['email']
					'user_password'=> $_POST['password']
			);

			$this->db->where('id', $id);
			$this->db->update('user', $profile);
		}	
?>