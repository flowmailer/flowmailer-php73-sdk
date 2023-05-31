<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

use Flowmailer\API\Collection\FlowStepCollection;

/**
 * FlowTemplate.
 *
 * Message flow template
 */
final class FlowTemplate implements ModelInterface
{
    /**
     * Flow description.
     * @var string
     */
    private $description;

    /**
     * @var bool|null
     */
    private $editable;

    /**
     * Flow template ID.
     * @var string|null
     */
    private $id;

    /**
     * Flow steps that each message in this flow will be processed by.
     * @var FlowStepCollection|null
     */
    private $steps;

    /**
     * Id of the parent flow.
     * @var string|null
     */
    private $templateId;

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setEditable(?bool $editable = null): self
    {
        $this->editable = $editable;

        return $this;
    }

    public function getEditable(): ?bool
    {
        return $this->editable;
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

    public function setSteps(?FlowStepCollection $steps = null): self
    {
        $this->steps = $steps;

        return $this;
    }

    public function getSteps(): ?FlowStepCollection
    {
        return $this->steps;
    }

    public function setTemplateId(?string $templateId = null): self
    {
        $this->templateId = $templateId;

        return $this;
    }

    public function getTemplateId(): ?string
    {
        return $this->templateId;
    }
}
