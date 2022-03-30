<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

/**
 * Error.
 */
final class Error implements ModelInterface
{
    /**
     * @var mixed[]|null
     */
    private $arguments;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $defaultMessage;

    /**
     * @var string|null
     */
    private $field;

    /**
     * @var string|null
     */
    private $objectName;

    /**
     * @var \stdClass|null
     */
    private $rejectedValue;

    public function setArguments(?array $arguments = null): self
    {
        $this->arguments = $arguments;

        return $this;
    }

    public function getArguments(): ?array
    {
        return $this->arguments;
    }

    public function setCode(?string $code = null): self
    {
        $this->code = $code;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setDefaultMessage(?string $defaultMessage = null): self
    {
        $this->defaultMessage = $defaultMessage;

        return $this;
    }

    public function getDefaultMessage(): ?string
    {
        return $this->defaultMessage;
    }

    public function setField(?string $field = null): self
    {
        $this->field = $field;

        return $this;
    }

    public function getField(): ?string
    {
        return $this->field;
    }

    public function setObjectName(?string $objectName = null): self
    {
        $this->objectName = $objectName;

        return $this;
    }

    public function getObjectName(): ?string
    {
        return $this->objectName;
    }

    public function setRejectedValue(?\stdClass $rejectedValue = null): self
    {
        $this->rejectedValue = $rejectedValue;

        return $this;
    }

    public function getRejectedValue(): ?\stdClass
    {
        return $this->rejectedValue;
    }
}
