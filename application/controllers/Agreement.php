<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agreement extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Agreement_model');
    }

    public function index()
    {
        $data = $this->Agreement_model->getAgreements();
        $this->load->view('welcome_message', [
            'data' => json_encode($data)
        ]);
    }

    public function create()
    {
        if($this->input->server('REQUEST_METHOD') === 'POST') {
            redirect('agreements/create');
        }

        $this->load->view('agreement/create', [
            'post' => $this->input->server('REQUEST_METHOD')
        ]);
    }
}
