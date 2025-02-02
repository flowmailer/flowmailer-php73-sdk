<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

use Flowmailer\API\Enum\TemplateEngine;
use Flowmailer\API\Enum\TemplateMimeType;

/**
 * Template.
 *
 * A flowmailer content template
 */
class Template implements ModelInterface
{
    /**
     * Content-ID header (required for disposition `related`).
     *
     *  Example: `<part1.DE1D8F7E.E51807FF@flowmailer.com>`
     *
     *  Only supported for custom content-types.
     * @var string|null
     */
    private $contentId;
    /**
     * Template content.
     * @var string|null
     */
    private $data;
    /**
     * Decode Base64.
     *
     *  Only supported for custom content-types.
     * @var bool|null
     */
    private $decodeBase64;
    /**
     * Template description.
     * @var string
     */
    private $description;
    /**
     * Content-Disposition header for the attachment.
     *
     *  Supported values include: `attachment`, `inline` and `related`
     *
     *  Special value `related` should be used for images referenced in the HTML.
     *
     *  Only supported for custom content-types.
     * @var string|null
     */
    private $disposition;
    /**
     * Prevents this template from being updated when copying to another account.
     *
     *  This flag is checked on the source template.
     * @var bool|null
     */
    private $doNotUpdateOnCopy;
    /**
     * Content filename.
     *
     *  Only supported for custom content-types and `application/vnd.flowmailer.itext+pdf`.
     * @var string|null
     */
    private $filename;
    /**
     * Template ID.
     * @var string|null
     */
    private $id;
    /**
     * Supported mime types:
     *
     * - text/plain
     * - text/html
     * - application/vnd.flowmailer.itext+pdf
     * @var string|TemplateMimeType
     */
    private $mimeType;
    /**
     * The only supported template engine is `freemarker-2.3.20`.
     * @var string|TemplateEngine
     */
    private $templateEngine = TemplateEngine::FREEMARKER_2_3_20;
    public function __toString(): string
    {
        return (string) $this->id;
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
    public function setData(?string $data = null): self
    {
        $this->data = $data;

        return $this;
    }
    public function getData(): ?string
    {
        return $this->data;
    }
    public function setDecodeBase64(?bool $decodeBase64 = null): self
    {
        $this->decodeBase64 = $decodeBase64;

        return $this;
    }
    public function getDecodeBase64(): ?bool
    {
        return $this->decodeBase64;
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
    public function setDisposition(?string $disposition = null): self
    {
        $this->disposition = $disposition;

        return $this;
    }
    public function getDisposition(): ?string
    {
        return $this->disposition;
    }
    public function setDoNotUpdateOnCopy(?bool $doNotUpdateOnCopy = null): self
    {
        $this->doNotUpdateOnCopy = $doNotUpdateOnCopy;

        return $this;
    }
    public function getDoNotUpdateOnCopy(): ?bool
    {
        return $this->doNotUpdateOnCopy;
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
     * @param string|TemplateMimeType $mimeType
     */
    public function setMimeType($mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }
    /**
     * @return string|TemplateMimeType
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }
    /**
     * @param string|TemplateEngine $templateEngine
     */
    public function setTemplateEngine($templateEngine): self
    {
        $this->templateEngine = $templateEngine;

        return $this;
    }
    /**
     * @return string|TemplateEngine
     */
    public function getTemplateEngine()
    {
        return $this->templateEngine;
    }
}
