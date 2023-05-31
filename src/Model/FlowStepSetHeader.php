<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

/**
 * FlowStepSetHeader.
 */
final class FlowStepSetHeader implements ModelInterface
{
    /**
     * Name of the header to add to the email.
     * @var string
     */
    private $headerName;

    /**
     * Value to set in the header.
     * @var string|null
     */
    private $headerValue;

    public function setHeaderName(string $headerName): self
    {
        $this->headerName = $headerName;

        return $this;
    }

    public function getHeaderName(): string
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
}
