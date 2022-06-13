<?php
require_once "Cliente.php";
class PessoaJuridica extends Cliente{
    private string $cnpj;
    private int $anoFundacao;
    private string $nomeFantasia;


    public function __construct()
    {
        $this->setSituacao("Verificar");
    }

    
    public function getCnpj(): string
    {
        return $this->cnpj;
    }
    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }

    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }

   
    public function setCnpj(string $cnpj)
    {
        $this->cnpj = $cnpj;

        
    }

    
    public function setAnoFundacao(int $anoFundacao)
    {
        $this->anoFundacao = $anoFundacao;

        
    }

    
    public function setNomeFantasia(string $nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;

        
    }
}



?>