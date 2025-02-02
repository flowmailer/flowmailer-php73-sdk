<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

use Flowmailer\API\Collection\HeaderCollection;
use Flowmailer\API\Enum\FlowStepExternalDataRequestMethod;

/**
 * FlowStepExternalData.
 */
class FlowStepExternalData implements ModelInterface
{
    /**
     * When true the result variable will be filled with a structure that also contains the response headers. When false the result variable will be filled with just the response body.
     * @var bool|null
     */
    private $fullResponseInVariable;

    /**
     * Template text for the request body.
     *
     *  Only useful for the following request methods `POST`, `PUT` and `PATCH`
     * @var string|null
     */
    private $requestBodyTemplate;

    /**
     * Request headers for external data HTTP request.
     * @var HeaderCollection|null
     */
    private $requestHeaders;

    /**
     * HTTP request method.
     *
     *  Valid values: `GET` `POST` `PUT` `PATCH` `DELETE`
     * @var string|FlowStepExternalDataRequestMethod|null
     */
    private $requestMethod = null;

    /**
     * Format of the external data, `json` or `json`.
     * @var string|null
     */
    private $resultFormat;

    /**
     * Variable to store the external content in.
     * @var string|null
     */
    private $resultVariable;

    /**
     * URL to load the external content from.
     *
     *  Template variables can be used in this field.
     * @var string
     */
    private $urlTemplate;

    public function setFullResponseInVariable(?bool $fullResponseInVariable = null): self
    {
        $this->fullResponseInVariable = $fullResponseInVariable;

        return $this;
    }

    public function getFullResponseInVariable(): ?bool
    {
        return $this->fullResponseInVariable;
    }

    public function setRequestBodyTemplate(?string $requestBodyTemplate = null): self
    {
        $this->requestBodyTemplate = $requestBodyTemplate;

        return $this;
    }

    public function getRequestBodyTemplate(): ?string
    {
        return $this->requestBodyTemplate;
    }

    public function setRequestHeaders(?HeaderCollection $requestHeaders = null): self
    {
        $this->requestHeaders = $requestHeaders;

        return $this;
    }

    public function getRequestHeaders(): ?HeaderCollection
    {
        return $this->requestHeaders;
    }

    /**
     * @param string|FlowStepExternalDataRequestMethod|null $requestMethod
     */
    public function setRequestMethod($requestMethod = null): self
    {
        $this->requestMethod = $requestMethod;
        return $this;
    }

    /**
     * @return string|FlowStepExternalDataRequestMethod|null
     */
    public function getRequestMethod()
    {
        return $this->requestMethod;
    }

    public function setResultFormat(?string $resultFormat = null): self
    {
        $this->resultFormat = $resultFormat;

        return $this;
    }

    public function getResultFormat(): ?string
    {
        return $this->resultFormat;
    }

    public function setResultVariable(?string $resultVariable = null): self
    {
        $this->resultVariable = $resultVariable;

        return $this;
    }

    public function getResultVariable(): ?string
    {
        return $this->resultVariable;
    }

    public function setUrlTemplate(string $urlTemplate): self
    {
        $this->urlTemplate = $urlTemplate;

        return $this;
    }

    public function getUrlTemplate(): string
    {
        return $this->urlTemplate;
    }
}
