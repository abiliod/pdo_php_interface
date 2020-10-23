<?php

//**
//A herança em PHP é declarada da seguinte forma, onde as demais
// propriedades e métodos são da classe filha (Assinatura) e não da classe
// pai (Produto): class Assinatura extends Produto{ ...}*
//

class Assinatura extends Produto implements Expiravel
{
    private $dataExpiracao;

    /**
     * @return mixed
     */
    public function getDataExpiracao()
    {
        return $this->dataExpiracao;
    }

    /**
     * @param mixed $dataExpiracao
     */
    public function setDataExpiracao($dataExpiracao)
    {
        $this->dataExpiracao = new \DateTime($dataExpiracao);
    }

    public function getTempoRestante()
    {
        return $this->dataExpiracao->diff(new \DateTime());
    }


}