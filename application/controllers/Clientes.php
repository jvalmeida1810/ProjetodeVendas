<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Clientes extends CI_Controller
{


    public function index()
    {
        $this->load->view('clientes/index.php');
    }

    public function insert()
    {
        echo '<pre>';
        if (!$this->input->post()) {
            redirect('/');
        }
        // [clieCPF] => 00009090
        // [crieNome] => João Vitor
        // [crieEndereco] => Rua Vereador Francisco de Sousa Pedrosa 
        // [clieNumero] => 218
        // [crieBairro] => Jericozinho
        // [clieCep] => 58830000
        // [crieCidade] => Jericó
        // [clieEstado] => PB
        // [clieReferencia] => Perto do Postinho
        $data = elements(
            array('clieCPF', 'clieNome', 'clieEndereco', 'clieNumero', 'clieBairro', 'clieCep', 'clieCidade', 'clieEstado', 'clieReferencia'),
            $this->input->post()
        );
        $data = html_escape($data);

        if ($this->core_model->insert('clientes', $data)) {
            $this->session->set_flashdata('sucesso', 'Registro inserido com sucesso.');
        } else {
            $this->session->set_flashdata('error', 'Não foi possivel inserir o registro.');
        }

        redirect($this->router->fetch_class());
        // echo '<pre>';
        // print_r($this->input->post());
        // exit();
    }
}
