<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

use Flowmailer\API\Enum\MessageType;

/**
 * SampleMessage.
 */
class SampleMessage implements ModelInterface
{
    /**
     * @var \DateTimeInterface|null
     */
    private $created;

    /**
     * @var string
     */
    private $description;

    /**
     * @var mixed[]|null
     */
    private $extraData;

    /**
     * @var string|null
     */
    private $fromAddress;

    /**
     * @var string|null
     */
    private $fromName;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|MessageType
     */
    private $messageType;

    /**
     * @var string|null
     */
    private $mimedata;

    /**
     * @var string|null
     */
    private $sender;

    /**
     * @var ObjectDescription|null
     */
    private $source;

    public function setCreated(?\DateTimeInterface $created = null): self
    {
        $this->created = $created;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
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

    public function setExtraData(?array $extraData = null): self
    {
        $this->extraData = $extraData;

        return $this;
    }

    public function getExtraData(): ?array
    {
        return $this->extraData;
    }

    public function setFromAddress(?string $fromAddress = null): self
    {
        $this->fromAddress = $fromAddress;

        return $this;
    }

    public function getFromAddress(): ?string
    {
        return $this->fromAddress;
    }

    public function setFromName(?string $fromName = null): self
    {
        $this->fromName = $fromName;

        return $this;
    }

    public function getFromName(): ?string
    {
        return $this->fromName;
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
}
