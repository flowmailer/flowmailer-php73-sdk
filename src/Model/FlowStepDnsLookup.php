<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

/**
 * FlowStepDnsLookup.
 */
class FlowStepDnsLookup implements ModelInterface
{
    /**
     * @var string
     */
    private $domainNameTemplate;

    /**
     * @var bool|null
     */
    private $ignoreErrors;

    /**
     * @var string
     */
    private $recordType;

    /**
     * Variable to store the external content in.
     * @var string
     */
    private $resultVariable;

    public function setDomainNameTemplate(string $domainNameTemplate): self
    {
        $this->domainNameTemplate = $domainNameTemplate;

        return $this;
    }

    public function getDomainNameTemplate(): string
    {
        return $this->domainNameTemplate;
    }

    public function setIgnoreErrors(?bool $ignoreErrors = null): self
    {
        $this->ignoreErrors = $ignoreErrors;

        return $this;
    }

    public function getIgnoreErrors(): ?bool
    {
        return $this->ignoreErrors;
    }

    public function setRecordType(string $recordType): self
    {
        $this->recordType = $recordType;

        return $this;
    }

    public function getRecordType(): string
    {
        return $this->recordType;
    }

    public function setResultVariable(string $resultVariable): self
    {
        $this->resultVariable = $resultVariable;

        return $this;
    }

    public function getResultVariable(): string
    {
        return $this->resultVariable;
    }
}
