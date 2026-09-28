<?php

class Paciente extends Pessoa{
  
  public $convenio;

  public $observacao;
  
  public function cadastrar ()
  {
    $db = new DataBase('passiente');
    $db->insert([
      'nome'=> $this->nome,
      'cpf' => $this->cpf,
      'data_nacimento' => $this->data_nascimento,
      'telefone' => $this->telefone,
      'email'=> $this->email,
      'convenio' => $this->convenio,
      'observacao' => $this->observacao
    ]);
  }

  public function alterar()
  {}

  public static function  excluir ()
  {}
  
  public static function listar()
{}


}