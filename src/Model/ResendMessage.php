<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

/**
 * ResendMessage.
 */
class ResendMessage implements ModelInterface
{
    /**
     * Override recipient email address or phone number.
     * @var string|null
     */
    private $recipientAddress;

    public function setRecipientAddress(?string $recipientAddress = null): self
    {
        $this->recipientAddress = $recipientAddress;

        return $this;
    }

    public function getRecipientAddress(): ?string
    {
        return $this->recipientAddress;
    }
}
