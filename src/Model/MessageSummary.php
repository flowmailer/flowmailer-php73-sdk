<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

/**
 * MessageSummary.
 *
 * Message statistics summary
 */
final class MessageSummary implements ModelInterface
{
    /**
     * Average delivery time in milliseconds.
     * @var int|null
     */
    private $averageDeliverTimeMillis;

    /**
     * Number of times a link has been clicked.
     * @var int|null
     */
    private $clicked;

    /**
     * Number of messages delivered.
     * @var int|null
     */
    private $delivered;

    /**
     * Number of times a message has been opened.
     * @var int|null
     */
    private $opened;

    /**
     * Number of messages processed.
     * @var int|null
     */
    private $processed;

    /**
     * Number of messages sent.
     * @var int|null
     */
    private $sent;

    /**
     * Number of messages in which a link has been clicked.
     * @var int|null
     */
    private $uniqueClicked;

    /**
     * Number of messages that have been opened.
     * @var int|null
     */
    private $uniqueOpened;

    public function setAverageDeliverTimeMillis(?int $averageDeliverTimeMillis = null): self
    {
        $this->averageDeliverTimeMillis = $averageDeliverTimeMillis;

        return $this;
    }

    public function getAverageDeliverTimeMillis(): ?int
    {
        return $this->averageDeliverTimeMillis;
    }

    public function setClicked(?int $clicked = null): self
    {
        $this->clicked = $clicked;

        return $this;
    }

    public function getClicked(): ?int
    {
        return $this->clicked;
    }

    public function setDelivered(?int $delivered = null): self
    {
        $this->delivered = $delivered;

        return $this;
    }

    public function getDelivered(): ?int
    {
        return $this->delivered;
    }

    public function setOpened(?int $opened = null): self
    {
        $this->opened = $opened;

        return $this;
    }

    public function getOpened(): ?int
    {
        return $this->opened;
    }

    public function setProcessed(?int $processed = null): self
    {
        $this->processed = $processed;

        return $this;
    }

    public function getProcessed(): ?int
    {
        return $this->processed;
    }

    public function setSent(?int $sent = null): self
    {
        $this->sent = $sent;

        return $this;
    }

    public function getSent(): ?int
    {
        return $this->sent;
    }

    public function setUniqueClicked(?int $uniqueClicked = null): self
    {
        $this->uniqueClicked = $uniqueClicked;

        return $this;
    }

    public function getUniqueClicked(): ?int
    {
        return $this->uniqueClicked;
    }

    public function setUniqueOpened(?int $uniqueOpened = null): self
    {
        $this->uniqueOpened = $uniqueOpened;

        return $this;
    }

    public function getUniqueOpened(): ?int
    {
        return $this->uniqueOpened;
    }
}
