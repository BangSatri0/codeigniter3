<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserEmploye_model extends CI_Controller{

    public function getuser()
    {
        $query = $this->db->get('users_employe');
        return $query->result();
    }

    public function getuserbyid($id)
    {
        $query = $this->db->get_where('users_employe', array('id' => $id));
        return $query->row();
    }
    
    public function insertuser()
    {
        $query = array(
            'username' => $nama,
            'email' => $email,
            'password' => $password
        );
    
        $this->db->insert('users_employe', $query);
        return $query->result();
    }

    public function updateuser()
    {
        $query = array(
            'username' => "regita",
            'email' => 'regitac024@gmail.com',
            'password' => 'cahya123'
        );
    
        $this->db->where('id', 10);
        $this->db->update('users_employe', $query);
        return $query->result();
    }
    public function deleteuser($id)
    {
        $this->db->delete('users_employe', array('id' => $id));
        return $query->result();
    }
    
        
}