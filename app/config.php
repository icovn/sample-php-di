<?php
use function DI\create;

return [
    // Bind an interface to an implementation
    \icovn\Mail::class => create(\icovn\MailConsole::class),
];
