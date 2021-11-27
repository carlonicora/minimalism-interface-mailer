<?php
namespace CarloNicora\Minimalism\Interfaces\Mailer\Interfaces;

use CarloNicora\Minimalism\Interfaces\Mailer\Objects\Recipient;

interface EmailInterface
{
    /**
     * @param Recipient $sender
     * @param string|null $subject
     * @param string|null $body
     * @param string $contentType
     */
    public function __construct(
        Recipient $sender,
        ?string $subject=null,
        ?string $body=null,
        string $contentType = 'text/html',
    );

    /**
     * @return string
     */
    public function getContentType(
    ): string;

    /**
     * @param string $subject
     */
    public function setSubject(
        string $subject,
    ): void;

    /**
     * @param string $body
     */
    public function setBody(
        string $body,
    ) : void;

    /**
     * @param Recipient $recipient
     */
    public function addRecipient(
        Recipient $recipient,
    ): void;

    /**
     * @return Recipient
     */
    public function getSender(
    ): Recipient;

    /**
     * @return string
     */
    public function getSubject(
    ): string;

    /**
     * @return string
     */
    public function getBody(
    ): string;

    /**
     * @return Recipient[]
     */
    public function getRecipients(
    ): array;
}