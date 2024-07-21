<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserEmploye extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // Load model 'User_model' di dalam constructor
        $this->load->model('UserEmploye_model');
    }

	public function getuser()
	{
        // Panggil method get_users dari model
        $users = $this->UserEmploye_model->getuser();
        echo json_encode($users);

	}

    public function getuserbyid($id)
	{
        // Panggil method get_users dari model
        $users = $this->UserEmploye_model->getuserbyid($id);
        echo json_encode($users);

	}

    public function insertuser()
	{
        // Panggil method get_users dari model
        $users = $this->UserEmploye_model->insertuser();
        $users = $this->UserEmploye_model->getuser();
        echo json_encode($users);

	}

    public function updateuser()
	{
        // Panggil method get_users dari model
        $users = $this->UserEmploye_model->updateuser();
        echo json_encode($users);

	}

    public function deleteuser($id)
	{
        // Panggil method get_users dari model
        $users = $this->UserEmploye_model->deleteuser($id);
        echo json_encode($users);

	}



}
