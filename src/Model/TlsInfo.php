<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

/**
 * TlsInfo.
 */
final class TlsInfo implements ModelInterface
{
    /**
     * @var string|null
     */
    private $cipher;

    /**
     * @var string|null
     */
    private $protocol;

    public function setCipher(?string $cipher = null): self
    {
        $this->cipher = $cipher;

        return $this;
    }

    public function getCipher(): ?string
    {
        return $this->cipher;
    }

    public function setProtocol(?string $protocol = null): self
    {
        $this->protocol = $protocol;

        return $this;
    }

    public function getProtocol(): ?string
    {
        return $this->protocol;
    }
}
