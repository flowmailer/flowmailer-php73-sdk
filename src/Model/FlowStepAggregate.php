<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

/**
 * FlowStepAggregate.
 */
class FlowStepAggregate implements ModelInterface
{
    /**
     * @var bool|null
     */
    private $alwaysSendFirst;

    /**
     * @var int|null
     */
    private $maxTimeSeconds;

    /**
     * @var int|null
     */
    private $quietTimeSeconds;

    public function setAlwaysSendFirst(?bool $alwaysSendFirst = null): self
    {
        $this->alwaysSendFirst = $alwaysSendFirst;

        return $this;
    }

    public function getAlwaysSendFirst(): ?bool
    {
        return $this->alwaysSendFirst;
    }

    public function setMaxTimeSeconds(?int $maxTimeSeconds = null): self
    {
        $this->maxTimeSeconds = $maxTimeSeconds;

        return $this;
    }

    public function getMaxTimeSeconds(): ?int
    {
        return $this->maxTimeSeconds;
    }

    public function setQuietTimeSeconds(?int $quietTimeSeconds = null): self
    {
        $this->quietTimeSeconds = $quietTimeSeconds;

        return $this;
    }

    public function getQuietTimeSeconds(): ?int
    {
        return $this->quietTimeSeconds;
    }
}
