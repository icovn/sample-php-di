<?php

namespace icovn;

class MailConsole implements Mail{

    public function send($title, $content)
    {
        echo "Title: " . $title;
    }
}