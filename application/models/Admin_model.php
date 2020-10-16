<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    

    /*public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required']
        ];
    }*/

    public function abstrak()
    {
        $sql="SELECT count(id) as jumlah_abstrak FROM abstrak_asli";
        $result=$this->db->query($sql);
        return $result->row()->jumlah_abstrak;
    }


    public function uji()
    {
         $sql="SELECT count(id) as jumlah_uji FROM hasil_uji";
        $result=$this->db->query($sql);
        return $result->row()->jumlah_uji;
    }

    public function dataadmin(){
         return $this->db->get("admin")->result();
    }


     public function dataabstrak()
    {
        return $this->db->get('abstrak_asli')->result();
    }

    public function datapengaturan(){
       return $this->db->get('pengaturan')->result();
    }

   public function savedataabstrak(){
    $post=$this->input->post();
    $this->id="";
    $this->judul=$post["judul"];
    $this->abstrak=$post["abstrak"];
    return $this->db->insert("abstrak_asli", $this);
   }
  

 
}
