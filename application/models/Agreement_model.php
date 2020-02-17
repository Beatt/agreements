<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agreement_model extends CI_Model
{
    function getAgreements()
    {
        $this->db->select('*');
        $q = $this->db->get('agreement');
        return $q->result_array();
    }
}
