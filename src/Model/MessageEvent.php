<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

/**
 * MessageEvent.
 *
 * Message event
 */
final class MessageEvent implements ModelInterface
{
    /**
     * Event data.
     * @var string|null
     */
    private $data;

    /**
     * @var string|null
     */
    private $deviceCategory;

    /**
     * Event data.
     *
     * @var |null
     */
    private $extraData = null;

    /**
     * Message event ID.
     * @var string|null
     */
    private $id;

    /**
     * Database insert date.
     *
     * @var |null
     */
    private $inserted = null;

    /**
     * @var string|null
     */
    private $linkName;

    /**
     * @var string|null
     */
    private $linkTarget;

    /**
     * Message ID.
     * @var string|null
     */
    private $messageId;

    /**
     * Message tags.
     *
     *  Only filled for the `GET /{account_id}/message_events` api call when the parameter `addmessagetags` is `true`
     *
     * @var string[]|null
     */
    private $messageTags;

    /**
     * MTA that reported this event.
     * @var string|null
     */
    private $mta;

    /**
     * @var string|null
     */
    private $operatingSystem;

    /**
     * @var string|null
     */
    private $operatingSystemVersion;

    /**
     * Event date.
     * @var \DateTimeInterface|null
     */
    private $received;

    /**
     * @var string|null
     */
    private $referer;

    /**
     * @var string|null
     */
    private $remoteAddr;

    /**
     * Bounce snippet or SMTP conversation snippet.
     * @var string|null
     */
    private $snippet;

    /**
     * Bounce sub type.
     *
     * @var |null
     */
    private $subType = null;

    /**
     * Custom event type.
     *
     * @var |null
     */
    private $tag = null;

    /**
     * Event type, must be `CUSTOM`.
     * @var string
     */
    private $type;

    /**
     * @var string|null
     */
    private $userAgent;

    /**
     * @var string|null
     */
    private $userAgentDisplayName;

    /**
     * @var string|null
     */
    private $userAgentString;

    /**
     * @var string|null
     */
    private $userAgentType;

    /**
     * @var string|null
     */
    private $userAgentVersion;

    public function setData(?string $data = null): self
    {
        $this->data = $data;

        return $this;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setDeviceCategory(?string $deviceCategory = null): self
    {
        $this->deviceCategory = $deviceCategory;

        return $this;
    }

    public function getDeviceCategory(): ?string
    {
        return $this->deviceCategory;
    }

    public function setExtraData($extraData = null): self
    {
        $this->extraData = $extraData;

        return $this;
    }

    public function getExtraData()
    {
        return $this->extraData;
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

    public function setInserted($inserted = null): self
    {
        $this->inserted = $inserted;

        return $this;
    }

    public function getInserted()
    {
        return $this->inserted;
    }

    public function setLinkName(?string $linkName = null): self
    {
        $this->linkName = $linkName;

        return $this;
    }

    public function getLinkName(): ?string
    {
        return $this->linkName;
    }

    public function setLinkTarget(?string $linkTarget = null): self
    {
        $this->linkTarget = $linkTarget;

        return $this;
    }

    public function getLinkTarget(): ?string
    {
        return $this->linkTarget;
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

    public function setMessageTags(?array $messageTags = null): self
    {
        $this->messageTags = $messageTags;

        return $this;
    }

    public function getMessageTags(): ?array
    {
        return $this->messageTags;
    }

    public function setMta(?string $mta = null): self
    {
        $this->mta = $mta;

        return $this;
    }

    public function getMta(): ?string
    {
        return $this->mta;
    }

    public function setOperatingSystem(?string $operatingSystem = null): self
    {
        $this->operatingSystem = $operatingSystem;

        return $this;
    }

    public function getOperatingSystem(): ?string
    {
        return $this->operatingSystem;
    }

    public function setOperatingSystemVersion(?string $operatingSystemVersion = null): self
    {
        $this->operatingSystemVersion = $operatingSystemVersion;

        return $this;
    }

    public function getOperatingSystemVersion(): ?string
    {
        return $this->operatingSystemVersion;
    }

    public function setReceived(?\DateTimeInterface $received = null): self
    {
        $this->received = $received;

        return $this;
    }

    public function getReceived(): ?\DateTimeInterface
    {
        return $this->received;
    }

    public function setReferer(?string $referer = null): self
    {
        $this->referer = $referer;

        return $this;
    }

    public function getReferer(): ?string
    {
        return $this->referer;
    }

    public function setRemoteAddr(?string $remoteAddr = null): self
    {
        $this->remoteAddr = $remoteAddr;

        return $this;
    }

    public function getRemoteAddr(): ?string
    {
        return $this->remoteAddr;
    }

    public function setSnippet(?string $snippet = null): self
    {
        $this->snippet = $snippet;

        return $this;
    }

    public function getSnippet(): ?string
    {
        return $this->snippet;
    }

    public function setSubType($subType = null): self
    {
        $this->subType = $subType;

        return $this;
    }

    public function getSubType()
    {
        return $this->subType;
    }

    public function setTag($tag = null): self
    {
        $this->tag = $tag;

        return $this;
    }

    public function getTag()
    {
        return $this->tag;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setUserAgent(?string $userAgent = null): self
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgentDisplayName(?string $userAgentDisplayName = null): self
    {
        $this->userAgentDisplayName = $userAgentDisplayName;

        return $this;
    }

    public function getUserAgentDisplayName(): ?string
    {
        return $this->userAgentDisplayName;
    }

    public function setUserAgentString(?string $userAgentString = null): self
    {
        $this->userAgentString = $userAgentString;

        return $this;
    }

    public function getUserAgentString(): ?string
    {
        return $this->userAgentString;
    }

    public function setUserAgentType(?string $userAgentType = null): self
    {
        $this->userAgentType = $userAgentType;

        return $this;
    }

    public function getUserAgentType(): ?string
    {
        return $this->userAgentType;
    }

    public function setUserAgentVersion(?string $userAgentVersion = null): self
    {
        $this->userAgentVersion = $userAgentVersion;

        return $this;
    }

    public function getUserAgentVersion(): ?string
    {
        return $this->userAgentVersion;
    }
}
