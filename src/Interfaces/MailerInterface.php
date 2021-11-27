<?php
namespace CarloNicora\Minimalism\Interfaces\Mailer\Interfaces;

interface MailerInterface
{
    /**
     * @param EmailInterface $email
     * @return bool
     */
    public function send(
        EmailInterface $email,
    ):bool;
}