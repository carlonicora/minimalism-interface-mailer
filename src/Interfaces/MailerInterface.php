<?php
namespace CarloNicora\Minimalism\Interfaces\Mailer\Interfaces;

use CarloNicora\Minimalism\Interfaces\ServiceInterface;

interface MailerInterface extends ServiceInterface
{
    /**
     * @param EmailInterface $email
     * @return bool
     */
    public function send(
        EmailInterface $email,
    ):bool;
}