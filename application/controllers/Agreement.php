<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agreement extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Agreement_model');
    }

    public function index()
    {
        $data = $this->Agreement_model->getAgreements();
        $this->load->view('agreement/index', [
            'data' => json_encode($data)
        ]);
    }

    public function create()
    {
        if($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->Agreement_model->create($this->input->post('agreement'));
            $this->session->set_flashdata('notice', '¡El convenio se ha creado correctamente!');
            redirect('agreements/create');
        }

        $this->load->view('agreement/create');
    }

    public function edit($id)
    {
        if($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->Agreement_model->update($id, $this->input->post('agreement'));
            $this->session->set_flashdata('notice', '¡El convenio se ha actualizado correctamente!');
            redirect('agreement/edit/' . $id);
        }

        $agreement = $this->Agreement_model->getAgreementById($id);
        $this->load->view('agreement/edit', [
            'agreement' => $agreement[0]
        ]);
    }
}
