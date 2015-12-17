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
            //$user = $this->userfactory->getUserByEmail($_POST['email']);
            
            if (true){
            //if ($user == false){
                
                $user->setNome($_POST['nome']);
                $user->setEmail($_POST['email']);
                $user->setNascimento($_POST['nascimento']);
                $user->setGenero($_POST['genero']);
                
                if ($this->userfactory->commit($user)){
                    echo "Usuario ". $user->getNome(). " cadastrado no banco com sucesso!";
                }else {
                    echo "Nao foi possivel efetuar cadastro!";
                }
                
            }
            
            
            
        }else{
            echo "NAO POstou!";
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
