<?php


defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * @author Hendrix
 */
class Home extends CI_Controller  {

    public function index() {

        
        $data['title'] = 'Cadastro';
        $this->load->view('header', $data);
        
        $this->load->view('cadastra');
        
        $this->load->view('footer');

    }

}
