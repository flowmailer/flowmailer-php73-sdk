<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

/**
 * FlowStepSchedule.
 */
class FlowStepSchedule implements ModelInterface
{
    /**
     * @var int|null
     */
    private $maxMessagesPerHour;

    /**
     * @var string|null
     */
    private $offsetType;

    /**
     * @var int|null
     */
    private $offsetValue;

    /**
     * @var string|null
     */
    private $scheduledTimeTemplate;

    /**
     * @var string|null
     */
    private $timeRangeDay0;

    /**
     * @var string|null
     */
    private $timeRangeDay1;

    /**
     * @var string|null
     */
    private $timeRangeDay2;

    /**
     * @var string|null
     */
    private $timeRangeDay3;

    /**
     * @var string|null
     */
    private $timeRangeDay4;

    /**
     * @var string|null
     */
    private $timeRangeDay5;

    /**
     * @var string|null
     */
    private $timeRangeDay6;

    /**
     * @var string|null
     */
    private $timeZone;

    public function setMaxMessagesPerHour(?int $maxMessagesPerHour = null): self
    {
        $this->maxMessagesPerHour = $maxMessagesPerHour;

        return $this;
    }

    public function getMaxMessagesPerHour(): ?int
    {
        return $this->maxMessagesPerHour;
    }

    public function setOffsetType(?string $offsetType = null): self
    {
        $this->offsetType = $offsetType;

        return $this;
    }

    public function getOffsetType(): ?string
    {
        return $this->offsetType;
    }

    public function setOffsetValue(?int $offsetValue = null): self
    {
        $this->offsetValue = $offsetValue;

        return $this;
    }

    public function getOffsetValue(): ?int
    {
        return $this->offsetValue;
    }

    public function setScheduledTimeTemplate(?string $scheduledTimeTemplate = null): self
    {
        $this->scheduledTimeTemplate = $scheduledTimeTemplate;

        return $this;
    }

    public function getScheduledTimeTemplate(): ?string
    {
        return $this->scheduledTimeTemplate;
    }

    public function setTimeRangeDay0(?string $timeRangeDay0 = null): self
    {
        $this->timeRangeDay0 = $timeRangeDay0;

        return $this;
    }

    public function getTimeRangeDay0(): ?string
    {
        return $this->timeRangeDay0;
    }

    public function setTimeRangeDay1(?string $timeRangeDay1 = null): self
    {
        $this->timeRangeDay1 = $timeRangeDay1;

        return $this;
    }

    public function getTimeRangeDay1(): ?string
    {
        return $this->timeRangeDay1;
    }

    public function setTimeRangeDay2(?string $timeRangeDay2 = null): self
    {
        $this->timeRangeDay2 = $timeRangeDay2;

        return $this;
    }

    public function getTimeRangeDay2(): ?string
    {
        return $this->timeRangeDay2;
    }

    public function setTimeRangeDay3(?string $timeRangeDay3 = null): self
    {
        $this->timeRangeDay3 = $timeRangeDay3;

        return $this;
    }

    public function getTimeRangeDay3(): ?string
    {
        return $this->timeRangeDay3;
    }

    public function setTimeRangeDay4(?string $timeRangeDay4 = null): self
    {
        $this->timeRangeDay4 = $timeRangeDay4;

        return $this;
    }

    public function getTimeRangeDay4(): ?string
    {
        return $this->timeRangeDay4;
    }

    public function setTimeRangeDay5(?string $timeRangeDay5 = null): self
    {
        $this->timeRangeDay5 = $timeRangeDay5;

        return $this;
    }

    public function getTimeRangeDay5(): ?string
    {
        return $this->timeRangeDay5;
    }

    public function setTimeRangeDay6(?string $timeRangeDay6 = null): self
    {
        $this->timeRangeDay6 = $timeRangeDay6;

        return $this;
    }

    public function getTimeRangeDay6(): ?string
    {
        return $this->timeRangeDay6;
    }

    public function setTimeZone(?string $timeZone = null): self
    {
        $this->timeZone = $timeZone;

        return $this;
    }

    public function getTimeZone(): ?string
    {
        return $this->timeZone;
    }
}
