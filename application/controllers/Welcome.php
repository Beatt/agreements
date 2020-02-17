<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Agreement_model');
    }

	public function index()
	{
        $data = $this->Agreement_model->getAgreements();
		$this->load->view('welcome_message', [
		    'data' => json_encode($data)
        ]);
	}
}
