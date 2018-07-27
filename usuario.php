<?php

class Usuario{
    private $id;
    private $nome;
    private $endereco;
    private $cpf;
    private $cnpj;
    private $pessoa;

    private $pdo;


    public function __construct($i = null) {
        try {
            $this->pdo = new PDO("mysql:dbname=cliente;host=localhost", "root", "");
        } catch(PDOException $e) {
            echo "FALHOU: ".$e->getMessage();
        }

        if(!is_null($i)) {
            $sql = "SELECT * FROM cliente WHERE id = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($i));

            if($sql->rowCount() > 0) {
                $data = $sql->fetch();
                $this->id = $data['id'];
                $this->nome = $data['nome'];
                $this->endereco = $data['endereco'];
                $this->cpf = $data['cpf'];
                $this->cnpj = $data['cnpj'];
                $this->pessoa = $data['pessoa'];
            }
        }
    }

    public function getId(){
        return $this->id;
    }

    public function setNome($n){
        $this->nome = $n;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setEndereco($e){
        $this->endereco = $e;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setCpf($fis){
        $this->cpf = $fis;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCnpj($pj){
        $this->cnpj = $pj;
    }

    public function getCnpj(){
        return $this->cnpj;
    }

    public function getPessoa(){
        return $this->pessoa;
    }

    public function setPessoa($p)
    {
        $this->pessoa = $p;
    }


        public function salvar(){
        if(!empty($this->id)){
            $sql = "UPDATE cliente SET nome = ?, endereco = ?,cpf = ?, cnpj = ?, pessoa = ? WHERE id = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($this->nome, $this->endereco, $this->cpf,$this->cnpj,$this->pessoa,$this->id));

        } else{
            $sql = "INSERT INTO cliente SET nome = ?, endereco = ?,cpf = ?, cnpj = ?, pessoa = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($this->nome, $this->endereco, $this->cpf,$this->cnpj, $this->pessoa));

        }
    }
    public function selecionarTudo($tabela){
            $sql = $this->pdo->prepare("SELECT * FROM `$tabela` LIMIT 10");
        $sql->execute();
        return $sql->fetchAll();

    }
}