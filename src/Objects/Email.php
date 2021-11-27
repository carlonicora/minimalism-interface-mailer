<?php
namespace CarloNicora\Minimalism\Interfaces\Mailer\Objects;

use CarloNicora\Minimalism\Interfaces\Mailer\Interfaces\EmailInterface;

class Email implements EmailInterface
{
    /** @var Recipient[] */
    private array $recipients=[];

    /**
     * @param Recipient $sender
     * @param string|null $subject
     * @param string|null $body
     * @param string $contentType
     */
    public function __construct(
        private Recipient $sender,
        private ?string $subject = null,
        protected ?string $body = null,
        protected string $contentType = 'text/html',
    )
    {
    }

    /**
     * @return string
     */
    public function getContentType(
    ): string
    {
        return $this->contentType;
    }

    /**
     * @param string $subject
     */
    public function setSubject(
        string $subject,
    ): void
    {
        $this->subject = $subject;
    }

    /**
     * @param string $body
     */
    public function setBody(
        string $body,
    ): void
    {
        $this->body = $body;
    }

    /**
     * @param Recipient $recipient
     */
    public function addRecipient(
        Recipient $recipient,
    ): void
    {
        $this->recipients[] = $recipient;
    }

    /**
     * @return Recipient
     */
    public function getSender(
    ): Recipient
    {
        return $this->sender;
    }

    /**
     * @return string
     */
    public function getSubject(
    ): string
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function getBody(
    ): string
    {
        return $this->body;
    }

    /**
     * @return Recipient[]
     */
    public function getRecipients(
    ): array
    {
        return $this->recipients;
    }
}