<?php
namespace CarloNicora\Minimalism\Interfaces\Mailer\Interfaces;

interface MailerInterface
{    /**
     * @param string $senderEmail
     * @param string $senderName
     */
    public function setSender(
        string $senderEmail,
        string $senderName,
    ):void;

    /**
     * @param EmailInterface $email
     * @return bool
     */
    public function send(
        EmailInterface $email,
    ):bool;
}