<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * @author Hendrix
 */

class Store extends CI_Controller {
    
    //quando chamado esse controller esse metodo é o primeiro a carregar
    public function index() {

        //load factory of users
        $this->load->library("UserFactory");

        //verifica se o post esta vindo com os dados
        if ((isset($_POST)) && (!empty($_POST['email']))) {

            //instancia uma nova model do user
            $user = new User();
            //seta as propriedades da model que estao vindo pelo POST
            $user->setNome($_POST['nome']);
            $user->setEmail($_POST['email']);
            $user->setNascimento($_POST['nascimento']);
            $user->setGenero($_POST['genero']);

            //testa para ver se é possível persistir no banco de dados
            if ($this->userfactory->commit($user)) {

                //define a variavel $data que passara informações as views
                $data['title'] = 'Cadastro';
                //carrega a view do header passando um title como parametro
                $this->load->view('header', $data);
                //seta  parametros 
                $data['tipo'] = "Sucesso";
                $data['mensagem'] = "<br>O usuário " . $user->getNome() . " foi cadastrado na promoção!";
                //carrega a view de resultado passando os parametros 
                $this->load->view('result', $data);
                //carrega a view footer result que mostra mensagem para aqueles que ja se cadastraram
                $this->load->view('footer_result');

                //se nao foi possivel persistir no banco carega as view com esses outros parametros       
            } else {
                $data['title'] = 'Cadastro';
                $this->load->view('header', $data);
                $data['tipo'] = "Erro";
                $data['mensagem'] = ": O email <b>" . $user->getEmail() . "</b> ja esta partipando da promoção. <br>Tente novamente com outro email.";
                $this->load->view('result', $data);
                $this->load->view('footer_result');
            }
        }
    }

//    metodo secundario para exibir todos os users cadastrados no banco  
//    public function get($id=0){
//        $this->load->library("UserFactory");
//        if ($id==0){
//            $users = $this->userfactory->getAll();
//            pd ($users);
//        }
//    }
    
}
