<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

/**
 * FlowStepResubmitMessage.
 */
class FlowStepResubmitMessage implements ModelInterface
{
    /**
     * Account to submit the message to.
     * @var ObjectDescription|null
     */
    private $account;

    /**
     * @var bool|null
     */
    private $duplicateMessage;

    /**
     * Selector of the flow to submit the message to.
     * @var string|null
     */
    private $flowSelector;

    /**
     * Name of the header to add to the email.
     * @var string|null
     */
    private $headerName;

    /**
     * Value to set in the header.
     * @var string|null
     */
    private $headerValue;

    /**
     * Source to submit the message to.
     * @var ObjectDescription|null
     */
    private $source;

    public function setAccount(?ObjectDescription $account = null): self
    {
        $this->account = $account;

        return $this;
    }

    public function getAccount(): ?ObjectDescription
    {
        return $this->account;
    }

    public function setDuplicateMessage(?bool $duplicateMessage = null): self
    {
        $this->duplicateMessage = $duplicateMessage;

        return $this;
    }

    public function getDuplicateMessage(): ?bool
    {
        return $this->duplicateMessage;
    }

    public function setFlowSelector(?string $flowSelector = null): self
    {
        $this->flowSelector = $flowSelector;

        return $this;
    }

    public function getFlowSelector(): ?string
    {
        return $this->flowSelector;
    }

    public function setHeaderName(?string $headerName = null): self
    {
        $this->headerName = $headerName;

        return $this;
    }

    public function getHeaderName(): ?string
    {
        return $this->headerName;
    }

    public function setHeaderValue(?string $headerValue = null): self
    {
        $this->headerValue = $headerValue;

        return $this;
    }

    public function getHeaderValue(): ?string
    {
        return $this->headerValue;
    }

    public function setSource(?ObjectDescription $source = null): self
    {
        $this->source = $source;

        return $this;
    }

    public function getSource(): ?ObjectDescription
    {
        return $this->source;
    }
}
