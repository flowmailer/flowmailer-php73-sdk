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
 * SimulateMessageResult.
 */
class SimulateMessageResult implements ModelInterface
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
     * @var ObjectDescription|null
     */
    private $flow;

    /**
     * Archived message html.
     * @var string|null
     */
    private $html;

    /**
     * `EMAIL`, `SMS` or `LETTER`.
     * @var string|MessageType|null
     */
    private $messageType = null;

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

    public function setFlow(?ObjectDescription $flow = null): self
    {
        $this->flow = $flow;

        return $this;
    }

    public function getFlow(): ?ObjectDescription
    {
        return $this->flow;
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
