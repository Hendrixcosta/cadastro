<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class UserFactory {

    private $_ci;

    //funcao construtora da biblioteca
    function __construct() {
        $this->_ci = & get_instance();
    }

    //funcao que recupera todos os users do banco
     public function getAll (){
        $query =  $this->_ci->db->query("SELECT * FROM users;");
        if ($query->num_rows() > 0) {
            $users = array();
            foreach ($query->result() as $row) {
                $users[] = $this->createObjectFromData($row);
            }
            return $users;
        }
        return false;
    }   

    //funcao que busca no banco um usuario de acordo com um email passado por parametro
   public function getUserByEmail ($email){
        $query =  $this->_ci->db->query("SELECT * FROM users WHERE email like \"%".$email."%\";");
        if ($query->num_rows() > 0) {
            return $this->createObjectFromData($query->row());
        }
        return false;        
    }    
    
    //funcao que persiste a model no banco
    public function commit ($user){
        $sql = "INSERT INTO `users`(`nome`, `email`, `nascimento`, `genero`) VALUES ( \"". $user->getNome(). "\" , \"".$user->getEmail() ."\" , \"".$user->getNascimento()."\" , \"".$user->getGenero()."\");" ;
        //echo "<br>".$sql;
        $query =  $this->_ci->db->query($sql);
        
        if ($query == 1) {
            return true;
        }else {
            return false;   
        }
    }
    
    //cria um objeto apartir da consulta ao banco
    public function createObjectFromData($row) {
        //Cria um novo objeto user com os dados da consulta
        $user = new User();
        $user->setNome($row->nome);
        $user->setEmail($row->email);
        $user->setNascimento($row->nascimento);
        $user->setGenero($row->genero);
        return $user;
    }

}