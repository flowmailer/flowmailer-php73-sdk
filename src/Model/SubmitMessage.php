<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

use Flowmailer\API\Collection\AttachmentCollection;
use Flowmailer\API\Collection\HeaderCollection;
use Flowmailer\API\Enum\DeliveryNotificationType;
use Flowmailer\API\Enum\MessageType;

/**
 * SubmitMessage.
 *
 * An email or sms message that can be submitted to Flowmailer.
 */
class SubmitMessage implements ModelInterface
{
    /**
     * Attachments.
     *
     *  Only applicable when `messageType` = `EMAIL`
     * @var AttachmentCollection|null
     */
    private $attachments;

    /**
     * Extra data that will be available in templates.
     * @var \stdClass|null
     */
    private $data;

    /**
     * `NONE`, `FAILURE` or `DELIVERY_AND_FAILURE`.
     *
     *  Defaults to `NONE` for `SMS`
     *
     *  Only applicable when `messageType` = `SMS`
     * @var string|DeliveryNotificationType|null
     */
    private $deliveryNotificationType = null;

    /**
     * Freely configurable value that can be used to select a flow or one of its variants.
     *
     *  Examples: invoice, previsit, ticket.
     * @var string|null
     */
    private $flowSelector;

    /**
     * From header address.
     *
     *  Only applicable when `messageType` = `EMAIL`
     * @var string|null
     */
    private $headerFromAddress;

    /**
     * From header name.
     *
     *  Only applicable when `messageType` = `EMAIL`
     * @var string|null
     */
    private $headerFromName;

    /**
     * To header address.
     *
     *  Only applicable when `messageType` = `EMAIL`
     * @var string|null
     */
    private $headerToAddress;

    /**
     * To header name.
     *
     *  Only applicable when `messageType` = `EMAIL`
     * @var string|null
     */
    private $headerToName;

    /**
     * Email headers.
     * @var HeaderCollection|null
     */
    private $headers;

    /**
     * Email HTML content.
     *
     *  Only applicable when `messageType` = `EMAIL`
     * @var string|null
     */
    private $html;

    /**
     * `EMAIL`, `SMS` or `LETTER`.
     * @var string|MessageType
     */
    private $messageType = MessageType::EMAIL;

    /**
     * Complete email MIME message with headers.
     *
     *  Only applicable when `messageType` = `EMAIL`
     * @var string|null
     */
    private $mimedata;

    /**
     * Recipient email address or phone number.
     *
     *  For email messages this cannot contain a display name.
     * @var string
     */
    private $recipientAddress;

    /**
     * @var \DateTimeInterface|null
     */
    private $scheduleAt;

    /**
     * Sender email address or phone number.
     *
     *  For email messages this cannot contain a display name.
     * @var string
     */
    private $senderAddress;

    /**
     * Email subject.
     * @var string|null
     */
    private $subject;

    /**
     * Tags.
     *
     * @var array<int,string>|null
     */
    private $tags;

    /**
     * Text content.
     * @var string|null
     */
    private $text;

    public function setAttachments(?AttachmentCollection $attachments = null): self
    {
        $this->attachments = $attachments;

        return $this;
    }

    public function getAttachments(): ?AttachmentCollection
    {
        return $this->attachments;
    }

    public function setData(?\stdClass $data = null): self
    {
        $this->data = $data;

        return $this;
    }

    public function getData(): ?\stdClass
    {
        return $this->data;
    }

    /**
     * @param string|DeliveryNotificationType|null $deliveryNotificationType
     */
    public function setDeliveryNotificationType($deliveryNotificationType = null): self
    {
        $this->deliveryNotificationType = $deliveryNotificationType;
        return $this;
    }

    /**
     * @return string|DeliveryNotificationType|null
     */
    public function getDeliveryNotificationType()
    {
        return $this->deliveryNotificationType;
    }

    public function setFlowSelector(?string $flowSelector = null): self
    {
        $this->flowSelector = $flowSelector;

        return $this;
    }

    public function getFlowSelector(): ?string
    {
        return $this->flowSelector;
    }

    public function setHeaderFromAddress(?string $headerFromAddress = null): self
    {
        $this->headerFromAddress = $headerFromAddress;

        return $this;
    }

    public function getHeaderFromAddress(): ?string
    {
        return $this->headerFromAddress;
    }

    public function setHeaderFromName(?string $headerFromName = null): self
    {
        $this->headerFromName = $headerFromName;

        return $this;
    }

    public function getHeaderFromName(): ?string
    {
        return $this->headerFromName;
    }

    public function setHeaderToAddress(?string $headerToAddress = null): self
    {
        $this->headerToAddress = $headerToAddress;

        return $this;
    }

    public function getHeaderToAddress(): ?string
    {
        return $this->headerToAddress;
    }

    public function setHeaderToName(?string $headerToName = null): self
    {
        $this->headerToName = $headerToName;

        return $this;
    }

    public function getHeaderToName(): ?string
    {
        return $this->headerToName;
    }

    public function setHeaders(?HeaderCollection $headers = null): self
    {
        $this->headers = $headers;

        return $this;
    }

    public function getHeaders(): ?HeaderCollection
    {
        return $this->headers;
    }

    public function setHtml(?string $html = null): self
    {
        $this->html = $html;

        return $this;
    }

    public function getHtml(): ?string
    {
        return $this->html;
    }

    /**
     * @param string|MessageType $messageType
     */
    public function setMessageType($messageType): self
    {
        $this->messageType = $messageType;

        return $this;
    }

    /**
     * @return string|MessageType
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    public function setMimedata(?string $mimedata = null): self
    {
        $this->mimedata = $mimedata;

        return $this;
    }

    public function getMimedata(): ?string
    {
        return $this->mimedata;
    }

    public function setRecipientAddress(string $recipientAddress): self
    {
        $this->recipientAddress = $recipientAddress;

        return $this;
    }

    public function getRecipientAddress(): string
    {
        return $this->recipientAddress;
    }

    public function setScheduleAt(?\DateTimeInterface $scheduleAt = null): self
    {
        $this->scheduleAt = $scheduleAt;

        return $this;
    }

    public function getScheduleAt(): ?\DateTimeInterface
    {
        return $this->scheduleAt;
    }

    public function setSenderAddress(string $senderAddress): self
    {
        $this->senderAddress = $senderAddress;

        return $this;
    }

    public function getSenderAddress(): string
    {
        return $this->senderAddress;
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

    public function setTags(?array $tags = null): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function getTags(): ?array
    {
        return $this->tags;
    }

    public function setText(?string $text = null): self
    {
        $this->text = $text;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }
}
