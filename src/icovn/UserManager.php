<?php

namespace icovn;

class UserManager
{
    private $mailer;

    public function __construct(Mail $mailer)
    {
        $this->mailer = $mailer;
    }

    public function register($email)
    {
        $this->mailer->send($email, 'Hello and welcome!');
    }
}