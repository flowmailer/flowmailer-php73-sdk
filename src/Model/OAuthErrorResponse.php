<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

/**
 * OAuthErrorResponse.
 *
 * Described in http://tools.ietf.org/html/rfc6749
 */
class OAuthErrorResponse implements ModelInterface
{
    /**
     * @var string
     */
    private $error;

    /**
     * @var string|null
     */
    private $errorDescription;

    /**
     * @var string|null
     */
    private $errorUri;

    public function setError(string $error): self
    {
        $this->error = $error;

        return $this;
    }

    public function getError(): string
    {
        return $this->error;
    }

    public function setErrorDescription(?string $errorDescription = null): self
    {
        $this->errorDescription = $errorDescription;

        return $this;
    }

    public function getErrorDescription(): ?string
    {
        return $this->errorDescription;
    }

    public function setErrorUri(?string $errorUri = null): self
    {
        $this->errorUri = $errorUri;

        return $this;
    }

    public function getErrorUri(): ?string
    {
        return $this->errorUri;
    }
}
