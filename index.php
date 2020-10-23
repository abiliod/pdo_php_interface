<?php

include_once("Expiravel.php");
include_once("Produto.php");
include_once("Assinatura.php");

$Assinatura = new Assinatura();

$Assinatura->setCodigo(123);
$Assinatura->setNome("Assinatura");
$Assinatura->setPreco(69.99);
$Assinatura->setDataExpiracao("2020-12-20");

echo "Dias restantes da assinatura: {$Assinatura->getTempoRestante()->days} ";
