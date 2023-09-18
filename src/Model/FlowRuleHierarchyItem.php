<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

use Flowmailer\API\Collection\FlowConditionCollection;
use Flowmailer\API\Collection\FlowRuleHierarchyItemCollection;

/**
 * FlowRuleHierarchyItem.
 */
class FlowRuleHierarchyItem implements ModelInterface
{
    /**
     * @var FlowConditionCollection|null
     */
    private $conditions;

    /**
     * @var ObjectDescription|null
     */
    private $flow;

    /**
     * @var FlowRuleHierarchyItemCollection|null
     */
    private $nodes;

    /**
     * @var string|null
     */
    private $parentId;

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

    public function setNodes(?FlowRuleHierarchyItemCollection $nodes = null): self
    {
        $this->nodes = $nodes;

        return $this;
    }

    public function getNodes(): ?FlowRuleHierarchyItemCollection
    {
        return $this->nodes;
    }

    public function setParentId(?string $parentId = null): self
    {
        $this->parentId = $parentId;

        return $this;
    }

    public function getParentId(): ?string
    {
        return $this->parentId;
    }
}
