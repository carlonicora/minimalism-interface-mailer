<?php
namespace CarloNicora\Minimalism\Interfaces\Mailer\Objects;

use CarloNicora\Minimalism\Interfaces\Mailer\Enums\RecipientType;

class Recipient
{
    /**
     * @param string $emailAddress
     * @param string|null $name
     * @param RecipientType $type
     */
    public function __construct(
        private string        $emailAddress,
        private ?string       $name=null,
        private RecipientType $type=RecipientType::To,
    )
    {
    }

    /**
     * @return string
     */
    public function getEmailAddress(
    ): string
    {
        return $this->emailAddress;
    }

    /**
     * @return string|null
     */
    public function getName(
    ): ?string
    {
        return $this->name;
    }

    /**
     * @return RecipientType
     */
    public function getType(
    ): RecipientType
    {
        return $this->type;
    }
}