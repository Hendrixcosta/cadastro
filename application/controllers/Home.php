<?php


defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * @author Hendrix
 */
class Home extends CI_Controller  {

    public function index() {

        
        $data['title'] = 'Cadastro';
        $this->load->view('header', $data);
        
        $data['promocao'] = "Tenha chances de ganhar um Iphone todo mês!!";
        $this->load->view('cadastra', $data);
        
        $this->load->view('footer');

    }

}
