<?php

namespace Notification;

use PHPMailer \ PHPMailer \ PHPMailer;
use PHPMailer \ PHPMailer \ Exception;

class Email {

    private $mail = \stdClass::class;

    public function __construct() {
        $this->mail = new PHPMailer(true);

        //Server settings
        $this->mail->SMTPDebug = 2;                                       // Enable verbose debug output
        $this->mail->isSMTP();                                            // Send using SMTP
        $this->mail->Host = 'email-ssl.com.br';                           // Set the SMTP server to send through
        $this->mail->SMTPAuth = true;                                     // Enable SMTP authentication
        $this->mail->Username = 'workflow@suaclinicaeva.com.br';          // SMTP username
        $this->mail->Password = 'Ev@W0rkFl0w';                            // SMTP password
        $this->mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $this->mail->Port = 465;                                          // TCP port to connect to
        $this->mail->CharSet = 'utf-8';
        $this->mail->setLanguage('br');

        //Recipients
        $this->mail->setFrom('workflow@suaclinicaeva.com.br', 'Workflow Site');

        // Content
        $this->mail->isHTML(true);                                        // Set email format to HTML
    }

    public function sendMail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName) {
        $this->mail->Subject = (string) $subject;
        $this->mail->Body = $body;

        $this->mail->addAddress($addressEmail, $addressName);     // Add a recipient
        $this->mail->addReplyTo($replyEmail, $replyName);
        
        try{
            $this->mail->send();
        } catch (Exception $e){
            echo "Erro ao enviar o e-mail: {$this->mail->ErrorInfo} {$e->getMessage}";
        }
    }

}
