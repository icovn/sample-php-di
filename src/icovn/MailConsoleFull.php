<?php

namespace icovn;

class MailConsoleFull implements Mail
{

    public function send($title, $content)
    {
        echo "Title: " . $title . ", content: " . $content;
    }
}