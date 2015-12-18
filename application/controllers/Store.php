<?php


defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * @author Hendrix
 */
class Store extends CI_Controller  {

    public function index() {

        //load factory of users
        $this->load->library("UserFactory");
        
        //verifica se o post esta vindo com os dados
        if ((isset($_POST)) && (!empty($_POST['email']))){
            
            //instancia uma nova model do user
            $user = new User();
            
            $user->setNome($_POST['nome']);
            $user->setEmail($_POST['email']);
            $user->setNascimento($_POST['nascimento']);
            $user->setGenero($_POST['genero']);
                
            if ($this->userfactory->commit($user)){
                    
                    $data['title'] = 'Cadastro';
                    $this->load->view('header', $data);

                    $data['tipo'] = "Sucesso!";
                    $data['mensagem'] = "<br>O usuário ".$user->getNome()." foi cadastrado na promoção!";
                    $this->load->view('result', $data);

                    $this->load->view('footer');
            }else {
                    $data['title'] = 'Cadastro';
                    $this->load->view('header', $data);

                    $data['tipo'] = "Erro";
                    $data['mensagem'] = ": O email <b>".$user->getEmail()."</b> ja esta partipando da promoção. <br>Tente novamente com outro email.";
                    $this->load->view('result', $data);

                    $this->load->view('footer');
            }    
        }
    }
    
    public function get($id=0){
        
        
        $this->load->library("UserFactory");
        
        if ($id==0){
            $users = $this->userfactory->getAll();
            pd ($users);
        }else {
            //recuperar apenas 1 user
        }
        
    }

}
