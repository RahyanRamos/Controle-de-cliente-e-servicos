<?php

class Cliente extends Crud{
    protected $tabela = 'cliente';

    private $idCliente;
    private $nomeCliente;
    private $enderecoCliente;
    private $telefoneCliente;
    private $nascimentoCliente;
    private $bairroCliente;
    private $cidadeCliente;
    private $estadoCliente;

    public function setIdCliente($id){
        $this->idCliente = $id;
    }
    public function setNomeCliente($nome){
        $this->nomeCliente = $nome;
    }
    public function setEnderecoCliente($endereco){
        $this->enderecoCliente = $endereco;
    }
    public function setTelefoneCliente($telefone){
        $this->telefoneCliente = $telefone;
    }
    public function setNascimentoCliente($nascimento){
        $this->nascimentoCliente = $nascimento;
    }
    public function setBairroCliente($bairro){
        $this->bairroCliente = $bairro;
    }
    public function setCidadeCliente($cidade){
        $this->cidadeCliente = $cidade;
    }
    public function setEstadoCliente($estado){
        $this->estadoCliente = $estado;
    }

    public function getIdCliente(){
        return $this->idCliente;
    }
    public function getNomeCliente(){
        return $this->nomeCliente;
    }
    public function getEnderecoCliente(){
        return $this->enderecoCliente;
    }
    public function getTelefoneCliente(){
        return $this->telefoneCliente;
    }
    public function getNascimentoCliente(){
        return $this->nascimentoCliente;
    }
    public function getBairroCliente(){
        return $this->bairroCliente;
    }
    public function getCidadeCliente(){
        return $this->cidadeCliente;
    }
    public function getEstadoCliente(){
        return $this->estadoCliente;
    }

    public function inserir(){
        $nomeCliente = $this->getNomeCliente();
        $enderecoCliente = $this->getEnderecoCliente();
        $telefoneCliente = $this->getTelefoneCliente();
        $nascimentoCliente = $this->getNascimentoCliente();
        $bairroCliente = $this->getBairroCliente();
        $cidadeCliente = $this->getCidadeCliente();
        $estadoCliente = $this->getEstadoCliente();
        
        $sqlInserir = "INSERT INTO {$this->tabela}(nomeCliente, enderecoCliente, telefoneCliente, nascimentoCliente, bairroCliente, cidadeCliente, estadoCliente) VALUES ('$nomeCliente', '$enderecoCliente', '$telefoneCliente', '$nascimentoCliente', '$bairroCliente', '$cidadeCliente', '$estadoCliente')";

        if(Conexao::prepare($sqlInserir)){
            header('location: clientes.php');
        }
    }

    public function atualizar($campo, $id){
        $nomeCliente = $this->getNomeCliente();
        $enderecoCliente = $this->getEnderecoCliente();
        $telefoneCliente = $this->getTelefoneCliente();
        $nascimentoCliente = $this->getNascimentoCliente();
        $bairroCliente = $this->getBairroCliente();
        $cidadeCliente = $this->getCidadeCliente();
        $estadoCliente = $this->getEstadoCliente();

        $sqlInserir = "UPDATE {$this->tabela} SET nomeCliente = '$nomeCliente', enderecoCliente = '$enderecoCliente', telefoneCliente = '$telefoneCliente', nascimentoCliente = '$nascimentoCliente', bairroCliente = '$bairroCliente', cidadeCliente = '$cidadeCliente', estadoCliente = '$estadoCliente' WHERE $campo = $id";

        if(Conexao::prepare($sqlInserir)){
            header('location: clientes.php');
        }
    }
}