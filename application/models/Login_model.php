<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    private $_table = "admin";

    public $id;
    public $name;
    public $username;
    public $password;

    /*public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required']
        ];
    }*/

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = "";
        $this->name = $post["nama"];
        $this->username = $post['username'];
        $this->password = md5($post['password']);
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
          $this->name = $post["nama"];
        $this->username = $post['username'];
        $this->password = md5($post['password']);
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
