<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

use Flowmailer\API\Collection\AttachmentCollection;
use Flowmailer\API\Enum\MessageType;

/**
 * MessageArchive.
 *
 * Archived message text and/or html
 */
class MessageArchive implements ModelInterface
{
    /**
     * Attachments, without the content.
     *
     *  Only applicable when `messageType` = `EMAIL`
     * @var AttachmentCollection|null
     */
    private $attachments;

    /**
     * @var \stdClass|null
     */
    private $data;

    /**
     * The archive flow step that created this archived message.
     * @var string|null
     */
    private $flowStepId;

    /**
     * Archived message html.
     * @var string|null
     */
    private $html;

    /**
     * Link for the message details page. With resend button.
     *
     *  Only applicable when `messageType` = `EMAIL`
     * @var string|null
     */
    private $messageDetailsLink;

    /**
     * `EMAIL`, `SMS` or `LETTER`.
     * @var string|MessageType|null
     */
    private $messageType = null;

    /**
     * Online link.
     *
     *  Only applicable when `messageType` = `EMAIL`
     * @var string|null
     */
    private $onlineLink;

    /**
     * Indicates whether this archive is available for online version link.
     * @var bool|null
     */
    private $onlineVersion;

    /**
     * Archived message subject.
     * @var string|null
     */
    private $subject;

    /**
     * Archived message text.
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

    public function setFlowStepId(?string $flowStepId = null): self
    {
        $this->flowStepId = $flowStepId;

        return $this;
    }

    public function getFlowStepId(): ?string
    {
        return $this->flowStepId;
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

    public function setMessageDetailsLink(?string $messageDetailsLink = null): self
    {
        $this->messageDetailsLink = $messageDetailsLink;

        return $this;
    }

    public function getMessageDetailsLink(): ?string
    {
        return $this->messageDetailsLink;
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

    public function setOnlineVersion(?bool $onlineVersion = null): self
    {
        $this->onlineVersion = $onlineVersion;

        return $this;
    }

    public function getOnlineVersion(): ?bool
    {
        return $this->onlineVersion;
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
