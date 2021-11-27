<?php
namespace CarloNicora\Minimalism\Interfaces\Mailer\Interfaces;

interface MailerInterface
{    /**
     * @param string $senderEmail
     * @param string|null $senderName
     */
    public function setSender(
        string $senderEmail,
        ?string $senderName=null,
    ):void;

    /**
     * @param EmailInterface $email
     * @return bool
     */
    public function send(
        EmailInterface $email,
    ):bool;
}