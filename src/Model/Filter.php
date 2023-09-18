<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

use Flowmailer\API\Enum\MessageType;

/**
 * Filter.
 *
 * Filtered recipient address
 */
class Filter implements ModelInterface
{
    /**
     * Account ID.
     * @var string|null
     */
    private $accountId;

    /**
     * Filtered recipient address.
     * @var string
     */
    private $address;

    /**
     * Date on which this filter was added.
     * @var \DateTimeInterface|null
     */
    private $date;

    /**
     * Date on which this filter expires.
     * @var \DateTimeInterface|null
     */
    private $expiresOn;

    /**
     * Filter ID.
     * @var string|null
     */
    private $id;

    /**
     * Message event that was the reason for creating this filter.
     * @var MessageReturn|null
     */
    private $messageReturn;

    /**
     * This filter is for message type: `EMAIL` or `SMS`.
     * @var string|MessageType
     */
    private $messageType;

    /**
     * Filter reason.
     * @var string|null
     */
    private $reason;

    public function setAccountId(?string $accountId = null): self
    {
        $this->accountId = $accountId;

        return $this;
    }

    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setDate(?\DateTimeInterface $date = null): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setExpiresOn(?\DateTimeInterface $expiresOn = null): self
    {
        $this->expiresOn = $expiresOn;

        return $this;
    }

    public function getExpiresOn(): ?\DateTimeInterface
    {
        return $this->expiresOn;
    }

    public function setId(?string $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setMessageReturn(?MessageReturn $messageReturn = null): self
    {
        $this->messageReturn = $messageReturn;

        return $this;
    }

    public function getMessageReturn(): ?MessageReturn
    {
        return $this->messageReturn;
    }

    /**
     * @param string|MessageType $messageType
     */
    public function setMessageType($messageType): self
    {
        $this->messageType = $messageType;

        return $this;
    }

    /**
     * @return string|MessageType
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    public function setReason(?string $reason = null): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }
}
