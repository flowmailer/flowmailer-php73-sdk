<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

/**
 * FlowStepExtractData.
 */
class FlowStepExtractData implements ModelInterface
{
    /**
     * @var string|null
     */
    private $dataType;

    /**
     * @var string|null
     */
    private $filename;

    /**
     * @var bool|null
     */
    private $htmlDecodeText;

    /**
     * @var string|null
     */
    private $mimeType;

    /**
     * @var bool|null
     */
    private $removeMimePart;

    /**
     * @var string|null
     */
    private $selector;

    public function setDataType(?string $dataType = null): self
    {
        $this->dataType = $dataType;

        return $this;
    }

    public function getDataType(): ?string
    {
        return $this->dataType;
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

    public function setHtmlDecodeText(?bool $htmlDecodeText = null): self
    {
        $this->htmlDecodeText = $htmlDecodeText;

        return $this;
    }

    public function getHtmlDecodeText(): ?bool
    {
        return $this->htmlDecodeText;
    }

    public function setMimeType(?string $mimeType = null): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function setRemoveMimePart(?bool $removeMimePart = null): self
    {
        $this->removeMimePart = $removeMimePart;

        return $this;
    }

    public function getRemoveMimePart(): ?bool
    {
        return $this->removeMimePart;
    }

    public function setSelector(?string $selector = null): self
    {
        $this->selector = $selector;

        return $this;
    }

    public function getSelector(): ?string
    {
        return $this->selector;
    }
}
