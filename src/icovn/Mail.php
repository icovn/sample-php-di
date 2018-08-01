<?php

namespace icovn;

interface Mail{
    public function send($title, $content);
}