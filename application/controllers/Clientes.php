<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Clientes extends CI_Controller
{


    public function index()
    {
        $this->load->view('clientes/index.php');
    }
}
