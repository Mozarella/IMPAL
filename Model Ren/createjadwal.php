<?php
class Registrasi extends CI_Model
{
   
  public function daftar_jadwal($data)
    {
      var_dump($data);
        $param = array(
            "nama_matkul"=>$data['matkul'],
            "jam"=>$data['jam'],
            "ruangan"=>$data['ruangan'],
            "kelas"=>$data['kelas'],
            "kode_matkul"=>$data['kodem'],
            "hari"=>$data['hari'],
            "status"=>$data['status']

        );

        $insert = $this->db->insert('jadwal', $param);

        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}

?>