<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

/**
 * DataExpression.
 */
class DataExpression implements ModelInterface
{
    /**
     * Expression.
     * @var string|null
     */
    private $expression;

    /**
     * Value which must match the result of the expression.
     * @var string|null
     */
    private $value;

    public function setExpression(?string $expression = null): self
    {
        $this->expression = $expression;

        return $this;
    }

    public function getExpression(): ?string
    {
        return $this->expression;
    }

    public function setValue(?string $value = null): self
    {
        $this->value = $value;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }
}
