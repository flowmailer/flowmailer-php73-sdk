<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

/**
 * DkimKey.
 */
class DkimKey implements ModelInterface
{
    /**
     * @var string|null
     */
    private $cnameTarget;

    /**
     * @var string|null
     */
    private $domain;

    /**
     * @var string|null
     */
    private $publicKey;

    /**
     * @var string|null
     */
    private $selector;

    public function setCnameTarget(?string $cnameTarget = null): self
    {
        $this->cnameTarget = $cnameTarget;

        return $this;
    }

    public function getCnameTarget(): ?string
    {
        return $this->cnameTarget;
    }

    public function setDomain(?string $domain = null): self
    {
        $this->domain = $domain;

        return $this;
    }

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function setPublicKey(?string $publicKey = null): self
    {
        $this->publicKey = $publicKey;

        return $this;
    }

    public function getPublicKey(): ?string
    {
        return $this->publicKey;
    }

    public function setSelector(?string $selector = null): self
    {
        $this->selector = $selector;

        return $this;
    }

    public function getSelector(): ?string
    {
        return $this->selector;
    }
}
