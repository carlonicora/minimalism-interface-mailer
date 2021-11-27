<?php
namespace CarloNicora\Minimalism\Interfaces\Mailer\Interfaces;

use CarloNicora\Minimalism\Interfaces\Mailer\Objects\Recipient;

interface EmailInterface
{
    /**
     * @param string|null $subject
     * @param string|null $body
     * @param string $contentType
     */
    public function __construct(
        ?string $subject=null,
        ?string $body=null,
        string $contentType = 'text/html',
    );

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
     * @return string
     */
    public function getSenderEmail(
    ): string;

    /**
     * @return string|null
     */
    public function getSenderName(
    ): ?string;

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