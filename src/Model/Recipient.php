<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

use Flowmailer\API\Collection\FilterCollection;

/**
 * Recipient.
 *
 * Statistics for a single recipient
 */
class Recipient implements ModelInterface
{
    /**
     * Recipient email address or phone number.
     * @var string|null
     */
    private $address;

    /**
     * One or more filters for this recipient.
     * @var FilterCollection|null
     */
    private $filters;

    /**
     * Message statistics for this recipient.
     * @var MessageSummary|null
     */
    private $messageSummary;

    public function setAddress(?string $address = null): self
    {
        $this->address = $address;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setFilters(?FilterCollection $filters = null): self
    {
        $this->filters = $filters;

        return $this;
    }

    public function getFilters(): ?FilterCollection
    {
        return $this->filters;
    }

    public function setMessageSummary(?MessageSummary $messageSummary = null): self
    {
        $this->messageSummary = $messageSummary;

        return $this;
    }

    public function getMessageSummary(): ?MessageSummary
    {
        return $this->messageSummary;
    }
}
