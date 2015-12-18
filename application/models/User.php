<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente_model
 *
 * @author Hendrix
 */
class User  extends CI_Model {

    private $nome;
    private $email;
    private $nascimento;
    private $genero;
    
   
    
    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getNascimento() {
        return $this->nascimento;
    }

    function getGenero() {
        return $this->genero;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }

}
