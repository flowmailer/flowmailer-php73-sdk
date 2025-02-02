<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

use Flowmailer\API\Enum\DnsRecordStatus;

/**
 * DnsRecord.
 *
 * DNS record that should be configured
 */
class DnsRecord implements ModelInterface
{
    /**
     * Error messages for this DNS record.
     *
     *  Only filled when DNS records are validated.
     *
     * @var array<int,string>|null
     */
    private $errorMessages;

    /**
     * Record name.
     * @var string|null
     */
    private $name;

    /**
     * Current record status.
     *
     *  Only filled when DNS records are validated.
     *
     *  Possible values: `UNKNOWN`: We had an error while validating this DNS record `ERROR`: DNS record is not correct `WARNING`: DNS record is functional but could be improved `OK`: DNS record is ok
     * @var string|DnsRecordStatus|null
     */
    private $status = DnsRecordStatus::UNKNOWN;

    /**
     * Record type.
     * @var string|null
     */
    private $type;

    /**
     * Record value description in HTML.
     * @var string|null
     */
    private $value;

    /**
     * Warning messages for this DNS record.
     *
     *  Only filled when DNS records are validated.
     *
     * @var array<int,string>|null
     */
    private $warningMessages;

    /**
     * @var array<int,string>|null
     */
    private $warnings;

    public function setErrorMessages(?array $errorMessages = null): self
    {
        $this->errorMessages = $errorMessages;

        return $this;
    }

    public function getErrorMessages(): ?array
    {
        return $this->errorMessages;
    }

    public function setName(?string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|DnsRecordStatus|null $status
     */
    public function setStatus($status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string|DnsRecordStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function setType(?string $type = null): self
    {
        $this->type = $type;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setValue(?string $value = null): self
    {
        $this->value = $value;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setWarningMessages(?array $warningMessages = null): self
    {
        $this->warningMessages = $warningMessages;

        return $this;
    }

    public function getWarningMessages(): ?array
    {
        return $this->warningMessages;
    }

    public function setWarnings(?array $warnings = null): self
    {
        $this->warnings = $warnings;

        return $this;
    }

    public function getWarnings(): ?array
    {
        return $this->warnings;
    }
}
