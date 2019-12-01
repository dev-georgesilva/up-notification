<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(
    2, "email-ssl.com.br", "workflow@suaclinicaeva.com.br", "WorkEv@2019",
    "ssl", "465", "workflow@suaclinicaeva.com.br", "Workflow Site"
);

$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um e-mail de <b>Teste</b></p>", "george@suaclinicaeva.com.br", "George SIlva", "financeiro@suaclinicaeva.com.br", "Financeiro Clínica Eva");

var_dump($novoEmail);