<?php
namespace CarloNicora\Minimalism\Interfaces\Mailer\Enums;

enum RecipientType
{
    case To;
    case Cc;
    case Bcc;
}