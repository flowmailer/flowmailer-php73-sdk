<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

use Flowmailer\API\Collection\DataExpressionCollection;
use Flowmailer\API\Collection\HeaderCollection;

/**
 * FlowRuleSimple.
 *
 * Conditions which must be true for a message to use a flow
 */
final class FlowRuleSimple implements ModelInterface
{
    /**
     * Data expressions which must be present in the message.
     * @var DataExpressionCollection|null
     */
    private $dataExpressions;

    /**
     * Flow ID of the flow the messages will use if the specified conditions are true.
     * @var string|null
     */
    private $flowId;

    /**
     * Flow selector.
     * @var string|null
     */
    private $flowSelector;

    /**
     * Email headers which must be present in the message.
     * @var HeaderCollection|null
     */
    private $headers;

    /**
     * Sender email address or phone number.
     * @var string|null
     */
    private $sender;

    /**
     * Source ID which must have submitted the message.
     * @var string|null
     */
    private $sourceId;

    public function setDataExpressions(?DataExpressionCollection $dataExpressions = null): self
    {
        $this->dataExpressions = $dataExpressions;

        return $this;
    }

    public function getDataExpressions(): ?DataExpressionCollection
    {
        return $this->dataExpressions;
    }

    public function setFlowId(?string $flowId = null): self
    {
        $this->flowId = $flowId;

        return $this;
    }

    public function getFlowId(): ?string
    {
        return $this->flowId;
    }

    public function setFlowSelector(?string $flowSelector = null): self
    {
        $this->flowSelector = $flowSelector;

        return $this;
    }

    public function getFlowSelector(): ?string
    {
        return $this->flowSelector;
    }

    public function setHeaders(?HeaderCollection $headers = null): self
    {
        $this->headers = $headers;

        return $this;
    }

    public function getHeaders(): ?HeaderCollection
    {
        return $this->headers;
    }

    public function setSender(?string $sender = null): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getSender(): ?string
    {
        return $this->sender;
    }

    public function setSourceId(?string $sourceId = null): self
    {
        $this->sourceId = $sourceId;

        return $this;
    }

    public function getSourceId(): ?string
    {
        return $this->sourceId;
    }
}
