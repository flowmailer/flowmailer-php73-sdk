<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

use Flowmailer\API\Collection\SampleCollection;
use Flowmailer\API\Enum\SourceType;

/**
 * Source.
 *
 * Information about a source system
 *
 *  A source system can submit messages to flowmailer.
 */
class Source implements ModelInterface
{
    /**
     * Source description.
     * @var string
     */
    private $description;
    /**
     * Email DSN messages will be sent to this address.
     * @var string|null
     */
    private $dsnAddress;
    /**
     * Disable sending DSN messages for this source.
     * @var bool|null
     */
    private $dsnDisable;
    /**
     * @var \stdClass|null
     */
    private $extraData;
    /**
     * Email feedback loop messages will be sent to this address.
     * @var string|null
     */
    private $feedbackLoopAddress;
    /**
     * Human readable notifications for undelivered messages will be sent to this address.
     * @var string|null
     */
    private $humanReadableDsnAddress;
    /**
     * Enable sending human readable notifications for undelivered messages for this source.
     * @var bool|null
     */
    private $humanReadableDsnEnable;
    /**
     * Source ID.
     * @var string|null
     */
    private $id;
    /**
     * Date this source was last active.
     * @var \DateTimeInterface|null
     */
    private $lastActive;
    /**
     * Maximum message size in bytes.
     * @var int|null
     */
    private $maxMessageSize;
    /**
     * Message statistics summary for this source.
     * @var MessageSummary|null
     */
    private $messageSummary;
    /**
     * Message statistics for this source.
     * @var SampleCollection|null
     */
    private $statistics;
    /**
     * @var bool
     */
    private $tlsRequired;
    /**
     * Source type: `API`, `SMTP`, `SMTP_RCPT`, `SMTP_DOMAIN` `SMPP`, or `FLOWMAILER`.
     * @var string|SourceType
     */
    private $type;
    public function __toString(): string
    {
        return (string) $this->id;
    }
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function setDsnAddress(?string $dsnAddress = null): self
    {
        $this->dsnAddress = $dsnAddress;

        return $this;
    }
    public function getDsnAddress(): ?string
    {
        return $this->dsnAddress;
    }
    public function setDsnDisable(?bool $dsnDisable = null): self
    {
        $this->dsnDisable = $dsnDisable;

        return $this;
    }
    public function getDsnDisable(): ?bool
    {
        return $this->dsnDisable;
    }
    public function setExtraData(?\stdClass $extraData = null): self
    {
        $this->extraData = $extraData;

        return $this;
    }
    public function getExtraData(): ?\stdClass
    {
        return $this->extraData;
    }
    public function setFeedbackLoopAddress(?string $feedbackLoopAddress = null): self
    {
        $this->feedbackLoopAddress = $feedbackLoopAddress;

        return $this;
    }
    public function getFeedbackLoopAddress(): ?string
    {
        return $this->feedbackLoopAddress;
    }
    public function setHumanReadableDsnAddress(?string $humanReadableDsnAddress = null): self
    {
        $this->humanReadableDsnAddress = $humanReadableDsnAddress;

        return $this;
    }
    public function getHumanReadableDsnAddress(): ?string
    {
        return $this->humanReadableDsnAddress;
    }
    public function setHumanReadableDsnEnable(?bool $humanReadableDsnEnable = null): self
    {
        $this->humanReadableDsnEnable = $humanReadableDsnEnable;

        return $this;
    }
    public function getHumanReadableDsnEnable(): ?bool
    {
        return $this->humanReadableDsnEnable;
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
    public function setLastActive(?\DateTimeInterface $lastActive = null): self
    {
        $this->lastActive = $lastActive;

        return $this;
    }
    public function getLastActive(): ?\DateTimeInterface
    {
        return $this->lastActive;
    }
    public function setMaxMessageSize(?int $maxMessageSize = null): self
    {
        $this->maxMessageSize = $maxMessageSize;

        return $this;
    }
    public function getMaxMessageSize(): ?int
    {
        return $this->maxMessageSize;
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
    public function setStatistics(?SampleCollection $statistics = null): self
    {
        $this->statistics = $statistics;

        return $this;
    }
    public function getStatistics(): ?SampleCollection
    {
        return $this->statistics;
    }
    public function setTlsRequired(bool $tlsRequired): self
    {
        $this->tlsRequired = $tlsRequired;

        return $this;
    }
    public function getTlsRequired(): bool
    {
        return $this->tlsRequired;
    }
    /**
     * @param string|SourceType $type
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }
    /**
     * @return string|SourceType
     */
    public function getType()
    {
        return $this->type;
    }
}
