<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

use Flowmailer\API\Enum\MessageType;

/**
 * MessageHold.
 *
 * Messages that could not be processed
 */
class MessageHold implements ModelInterface
{
    /**
     * The time flowmailer was done processing this message.
     * @var \DateTimeInterface|null
     */
    private $backendDone;

    /**
     * MIME message data or text for SMS messages.
     * @var string|null
     */
    private $data;

    /**
     * Only for SMS messages.
     * @var int|null
     */
    private $dataCoding;

    /**
     * Message error text.
     * @var string|null
     */
    private $errorText;

    /**
     * @var \stdClass|null
     */
    private $extraData;

    /**
     * The selected flow.
     * @var ObjectDescription|null
     */
    private $flow;

    /**
     * Message ID.
     * @var string|null
     */
    private $messageId;

    /**
     * Message type: `EMAIL`, `SMS` or `LETTER`.
     * @var string|MessageType|null
     */
    private $messageType = null;

    /**
     * Message processing failure reason.
     * @var string|null
     */
    private $reason;

    /**
     * Message recipient address.
     * @var string|null
     */
    private $recipient;

    /**
     * Message sender address.
     * @var string|null
     */
    private $sender;

    /**
     * Source system that submitted this message.
     * @var ObjectDescription|null
     */
    private $source;

    /**
     * Message status.
     * @var string|null
     */
    private $status;

    /**
     * Message submit date.
     * @var \DateTimeInterface|null
     */
    private $submitted;

    /**
     * Transaction ID.
     * @var string|null
     */
    private $transactionId;

    public function setBackendDone(?\DateTimeInterface $backendDone = null): self
    {
        $this->backendDone = $backendDone;

        return $this;
    }

    public function getBackendDone(): ?\DateTimeInterface
    {
        return $this->backendDone;
    }

    public function setData(?string $data = null): self
    {
        $this->data = $data;

        return $this;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setDataCoding(?int $dataCoding = null): self
    {
        $this->dataCoding = $dataCoding;

        return $this;
    }

    public function getDataCoding(): ?int
    {
        return $this->dataCoding;
    }

    public function setErrorText(?string $errorText = null): self
    {
        $this->errorText = $errorText;

        return $this;
    }

    public function getErrorText(): ?string
    {
        return $this->errorText;
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

    public function setFlow(?ObjectDescription $flow = null): self
    {
        $this->flow = $flow;

        return $this;
    }

    public function getFlow(): ?ObjectDescription
    {
        return $this->flow;
    }

    public function setMessageId(?string $messageId = null): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function getMessageId(): ?string
    {
        return $this->messageId;
    }

    /**
     * @param string|MessageType|null $messageType
     */
    public function setMessageType($messageType = null): self
    {
        $this->messageType = $messageType;

        return $this;
    }

    /**
     * @return string|MessageType|null
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    public function setReason(?string $reason = null): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setRecipient(?string $recipient = null): self
    {
        $this->recipient = $recipient;

        return $this;
    }

    public function getRecipient(): ?string
    {
        return $this->recipient;
    }

    public function setSender(?string $sender = null): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getSender(): ?string
    {
        return $this->sender;
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

    public function setStatus(?string $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setSubmitted(?\DateTimeInterface $submitted = null): self
    {
        $this->submitted = $submitted;

        return $this;
    }

    public function getSubmitted(): ?\DateTimeInterface
    {
        return $this->submitted;
    }

    public function setTransactionId(?string $transactionId = null): self
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }
}
