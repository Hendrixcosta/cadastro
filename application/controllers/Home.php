<?php


defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * @author Hendrix
 */
class Home extends CI_Controller  {

    public function index() {

        //a variavel data é um array que passa informações à view
        $data['title'] = 'Cadastro';
        //carrega a view header que eh responsavel pelas importações do projeto como bootstrap e javascript
        $this->load->view('header', $data);
        
        //define o titulo do projeto
        $data['promocao'] = "Tenha chances de ganhar um Iphone todo mês!!";
        //carrega a view que exibirá o form de cadastro e o título da promoção
        $this->load->view('cadastra', $data);
        
        //carrega a view do footer 
        $this->load->view('footer');

    }

}
