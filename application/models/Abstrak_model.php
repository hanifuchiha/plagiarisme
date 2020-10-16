<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Abstrak_model extends CI_Model
{
    

    /*public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required']
        ];
    }*/

   
     public function dataabstrak()
    {
        return $this->db->get('abstrak_asli')->result();
    }

    public function datauji(){
         $sql="SELECT DISTINCT hasil_uji.judul, hasil_uji.hasil, abstrak_asli.judul as judulbr, hasil_uji.id_asli,abstrak_asli.id FROM hasil_uji
              JOIN abstrak_asli ON hasil_uji.id_asli = abstrak_asli.id
              ORDER BY hasil_uji.hasil DESC LIMIT 5";
              return $this->db->query($sql)->result_array();
       /* $result=$this->db->query($sql);
        return $result->row()->result()*/;
    }

   public function savedataabstrak(){
    $post=$this->input->post();
    $this->id="";
    $this->judul=$post["judul"];
    $this->abstrak=$post["abstrak"];
    return $this->db->insert("abstrak_asli", $this);
   }
  

 
}
