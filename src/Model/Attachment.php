<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

use Flowmailer\API\Enum\ContentDisposition;

/**
 * Attachment.
 */
class Attachment implements ModelInterface
{
    /**
     * @var string|null
     */
    private $content;

    /**
     * Content-ID header (required for disposition `related`).
     *
     *  Example: `<part1.DE1D8F7E.E51807FF@flowmailer.com>`
     * @var string|null
     */
    private $contentId;

    /**
     * Examples: `application/pdf`, `image/jpeg`.
     * @var string
     */
    private $contentType;

    /**
     * Content-Disposition header for the attachment.
     *
     *  Supported values include: `attachment`, `inline` and `related`
     *
     *  Special value `related` should be used for images referenced in the HTML.
     * @var string|ContentDisposition|null
     */
    private $disposition = null;

    /**
     * @var string|null
     */
    private $filename;

    public function setContent(?string $content = null): self
    {
        $this->content = $content;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContentId(?string $contentId = null): self
    {
        $this->contentId = $contentId;

        return $this;
    }

    public function getContentId(): ?string
    {
        return $this->contentId;
    }

    public function setContentType(string $contentType): self
    {
        $this->contentType = $contentType;

        return $this;
    }

    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * @param string|ContentDisposition|null $disposition
     */
    public function setDisposition($disposition = null): self
    {
        $this->disposition = $disposition;

        return $this;
    }

    /**
     * @return string|ContentDisposition|null
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    public function setFilename(?string $filename = null): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }
}
