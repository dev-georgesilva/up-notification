<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;

$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um e-mail de <b>Teste</b></p>", "george@suaclinicaeva.com.br", "George SIlva", "financeiro@suaclinicaeva.com.br", "Financeiro Clínica Eva");

var_dump($novoEmail);