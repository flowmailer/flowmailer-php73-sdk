<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

use Flowmailer\API\Collection\FlowConditionCollection;

/**
 * FlowRuleItem.
 */
class FlowRuleItem implements ModelInterface
{
    /**
     * @var FlowConditionCollection|null
     */
    private $conditions;

    /**
     * @var ObjectDescription|null
     */
    private $flow;

    public function setConditions(?FlowConditionCollection $conditions = null): self
    {
        $this->conditions = $conditions;

        return $this;
    }

    public function getConditions(): ?FlowConditionCollection
    {
        return $this->conditions;
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
}
