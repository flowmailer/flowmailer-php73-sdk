<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

use Flowmailer\API\Collection\AddressCollection;
use Flowmailer\API\Collection\HeaderCollection;
use Flowmailer\API\Collection\MessageEventCollection;
use Flowmailer\API\Enum\MessageType;

/**
 * Message.
 */
final class Message implements ModelInterface
{
    /**
     * The time flowmailer was done processing this message.
     * @var \DateTimeInterface|null
     */
    private $backendDone;

    /**
     * The time flowmailer started processing this message.
     * @var \DateTimeInterface|null
     */
    private $backendStart;

    /**
     * Message events.
     *
     *  Ordered by received, new events first.
     * @var MessageEventCollection|null
     */
    private $events;

    /**
     * Flow this message was processed in.
     * @var ObjectDescription|null
     */
    private $flow;

    /**
     * The email address in ` From` email header.
     * @var string|null
     */
    private $from;

    /**
     * The address in ` From` email header.
     * @var Address|null
     */
    private $fromAddress;

    /**
     * E-Mail headers of the submitted email message.
     *
     *  Only applicable when `messageType` = `EMAIL` and `addheaders` parameter is `true`
     * @var HeaderCollection|null
     */
    private $headersIn;

    /**
     * Headers of the final e-mail.
     *
     *  Only applicable when `messageType` = `EMAIL` and `addheaders` parameter is `true`
     * @var HeaderCollection|null
     */
    private $headersOut;

    /**
     * Message id.
     * @var string|null
     */
    private $id;

    /**
     * Link for the message details page. With resend button.
     * @var string|null
     */
    private $messageDetailsLink;

    /**
     * Content of the `Message-ID` email header.
     * @var string|null
     */
    private $messageIdHeader;

    /**
     * Message type: `EMAIL`, `SMS` or `LETTER`.
     * @var string|MessageType|null
     */
    private $messageType = null;

    /**
     * Last online link.
     * @var string|null
     */
    private $onlineLink;

    /**
     * Recipient address.
     * @var string|null
     */
    private $recipientAddress;

    /**
     * Sender address.
     * @var string|null
     */
    private $senderAddress;

    /**
     * Source system that submitted this message.
     * @var ObjectDescription|null
     */
    private $source;

    /**
     * Current message status.
     * @var string|null
     */
    private $status;

    /**
     * Message subject.
     *
     *  Only applicable when `messageType` = `EMAIL`
     * @var string|null
     */
    private $subject;

    /**
     * The time this message was submitted to flowmailer.
     * @var \DateTimeInterface|null
     */
    private $submitted;

    /**
     * Message tags, only available for api calls with `addtags=true`.
     *
     * @var string[]|null
     */
    private $tags;

    /**
     * The recipients in the ` To` email header.
     * @var AddressCollection|null
     */
    private $toAddressList;

    /**
     * The SMTP transaction id, returned with the SMTP ` 250` response.
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

    public function setBackendStart(?\DateTimeInterface $backendStart = null): self
    {
        $this->backendStart = $backendStart;

        return $this;
    }

    public function getBackendStart(): ?\DateTimeInterface
    {
        return $this->backendStart;
    }

    public function setEvents(?MessageEventCollection $events = null): self
    {
        $this->events = $events;

        return $this;
    }

    public function getEvents(): ?MessageEventCollection
    {
        return $this->events;
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

    public function setFrom(?string $from = null): self
    {
        $this->from = $from;

        return $this;
    }

    public function getFrom(): ?string
    {
        return $this->from;
    }

    public function setFromAddress(?Address $fromAddress = null): self
    {
        $this->fromAddress = $fromAddress;

        return $this;
    }

    public function getFromAddress(): ?Address
    {
        return $this->fromAddress;
    }

    public function setHeadersIn(?HeaderCollection $headersIn = null): self
    {
        $this->headersIn = $headersIn;

        return $this;
    }

    public function getHeadersIn(): ?HeaderCollection
    {
        return $this->headersIn;
    }

    public function setHeadersOut(?HeaderCollection $headersOut = null): self
    {
        $this->headersOut = $headersOut;

        return $this;
    }

    public function getHeadersOut(): ?HeaderCollection
    {
        return $this->headersOut;
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

    public function setMessageDetailsLink(?string $messageDetailsLink = null): self
    {
        $this->messageDetailsLink = $messageDetailsLink;

        return $this;
    }

    public function getMessageDetailsLink(): ?string
    {
        return $this->messageDetailsLink;
    }

    public function setMessageIdHeader(?string $messageIdHeader = null): self
    {
        $this->messageIdHeader = $messageIdHeader;

        return $this;
    }

    public function getMessageIdHeader(): ?string
    {
        return $this->messageIdHeader;
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

    public function setOnlineLink(?string $onlineLink = null): self
    {
        $this->onlineLink = $onlineLink;

        return $this;
    }

    public function getOnlineLink(): ?string
    {
        return $this->onlineLink;
    }

    public function setRecipientAddress(?string $recipientAddress = null): self
    {
        $this->recipientAddress = $recipientAddress;

        return $this;
    }

    public function getRecipientAddress(): ?string
    {
        return $this->recipientAddress;
    }

    public function setSenderAddress(?string $senderAddress = null): self
    {
        $this->senderAddress = $senderAddress;

        return $this;
    }

    public function getSenderAddress(): ?string
    {
        return $this->senderAddress;
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

    public function setSubject(?string $subject = null): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
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

    public function setTags(?array $tags = null): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function getTags(): ?array
    {
        return $this->tags;
    }

    public function setToAddressList(?AddressCollection $toAddressList = null): self
    {
        $this->toAddressList = $toAddressList;

        return $this;
    }

    public function getToAddressList(): ?AddressCollection
    {
        return $this->toAddressList;
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
