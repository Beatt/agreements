<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agreement_model extends CI_Model
{
    function create($agreement)
    {
        $this->db->insert('agreement', $agreement);
    }

    function update($id, $agreement)
    {
        $this->db->where('id', $id);
        $this->db->update('agreement', $agreement);
    }

    function getAgreements()
    {
        $this->db->select('*');
        $query = $this->db->get('agreement');
        return $query->result_array();
    }

    function getAgreementById($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('agreement');
        return $query->result_array();
    }
}
