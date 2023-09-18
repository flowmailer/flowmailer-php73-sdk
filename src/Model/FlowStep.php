<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

use Flowmailer\API\Enum\FlowStepType;

/**
 * FlowStep.
 *
 * A processing step in a flow
 */
class FlowStep implements ModelInterface
{
    /**
     * Only applicable and required when `type` = `addAttachment`.
     * @var FlowStepAddAttachment|null
     */
    private $addAttachment;

    /**
     * Only applicable when `type` = `aggregate`.
     * @var FlowStepAggregate|null
     */
    private $aggregate;

    /**
     * Comma separated list of link domains to modify for analytics parameters.
     *
     *  Only applicable when `type` = `analytics`
     * @var string|null
     */
    private $applyToLinkDomains;

    /**
     * Only applicable and required when `type` = `archive`.
     * @var FlowStepArchive|null
     */
    private $archive;

    /**
     * Only applicable and required when `type` = `discard`.
     * @var FlowStepDiscard|null
     */
    private $discard;

    /**
     * Only applicable when `type` = `qamail`.
     * @var int|null
     */
    private $divisor;

    /**
     * Only applicable and required when `type` = `dnsLookup`.
     * @var FlowStepDnsLookup|null
     */
    private $dnsLookup;

    /**
     * @var string|null
     */
    private $enabledExpression;

    /**
     * Indicates whether the contact is required or not.
     *
     *  Only applicable when `type` = `mailPlusContact`
     * @var bool|null
     */
    private $errorOnNotFound;

    /**
     * Only applicable and required when `type` = `externalContent`.
     * @var FlowStepExternalContent|null
     */
    private $externalContent;

    /**
     * Only applicable and required when `type` = `externalData`.
     * @var FlowStepExternalData|null
     */
    private $externalData;

    /**
     * Only applicable and required when `type` = `extractdata`.
     * @var FlowStepExtractData|null
     */
    private $extractData;

    /**
     * Flow step ID.
     * @var string|null
     */
    private $id;

    /**
     * Only applicable and required when `type` = `ldapSearch`.
     * @var FlowStepLdapSearch|null
     */
    private $ldapSearch;

    /**
     * Credentials to use for retrieving contacts from MailPlus.
     *
     *  Only applicable when `type` = `mailPlusContact`
     * @var MailPlusAPICredentials|null
     */
    private $mailPlusApiCredentials;

    /**
     * Overwrite existing URL Parameters in links.
     *
     *  Only applicable when `type` = `analytics`
     * @var bool|null
     */
    private $overwriteUrlParameters;

    /**
     * Only applicable when `type` = `resubmitMessage`.
     * @var FlowStepResubmitMessage|null
     */
    private $resubmitMessage;

    /**
     * Only applicable and required when `type` = `rewriteRecipient`.
     * @var FlowStepRewriteRecipient|null
     */
    private $rewriteRecipient;

    /**
     * Only applicable when `type` = `schedule`.
     * @var FlowStepSchedule|null
     */
    private $schedule;

    /**
     * Only applicable and required when `type` = `addHeader`.
     * @var FlowStepSetHeader|null
     */
    private $setHeader;

    /**
     * Only applicable and required when `type` = `setSender`.
     * @var FlowStepSetSender|null
     */
    private $setSender;

    /**
     * Template for the new subject. Template variables can be used in this field.
     *
     *  Only applicable when `type` = `subject`
     * @var string|null
     */
    private $subjectTemplate;

    /**
     * Only applicable when `type` = `template`.
     * @var ObjectDescription|null
     */
    private $template;

    /**
     * Email address the BCC mail will be sent to.
     *
     *  Only applicable and required when `type` = `qamail`
     * @var string|null
     */
    private $to;

    /**
     * Flow step type.
     * @var string|FlowStepType
     */
    private $type;

    /**
     * URL Parameters to add to all links. Template variables can be used in this field.
     *
     *  Only applicable when `type` = `analytics`
     * @var string|null
     */
    private $urlParametersTemplate;

    public function setAddAttachment(?FlowStepAddAttachment $addAttachment = null): self
    {
        $this->addAttachment = $addAttachment;

        return $this;
    }

    public function getAddAttachment(): ?FlowStepAddAttachment
    {
        return $this->addAttachment;
    }

    public function setAggregate(?FlowStepAggregate $aggregate = null): self
    {
        $this->aggregate = $aggregate;

        return $this;
    }

    public function getAggregate(): ?FlowStepAggregate
    {
        return $this->aggregate;
    }

    public function setApplyToLinkDomains(?string $applyToLinkDomains = null): self
    {
        $this->applyToLinkDomains = $applyToLinkDomains;

        return $this;
    }

    public function getApplyToLinkDomains(): ?string
    {
        return $this->applyToLinkDomains;
    }

    public function setArchive(?FlowStepArchive $archive = null): self
    {
        $this->archive = $archive;

        return $this;
    }

    public function getArchive(): ?FlowStepArchive
    {
        return $this->archive;
    }

    public function setDiscard(?FlowStepDiscard $discard = null): self
    {
        $this->discard = $discard;

        return $this;
    }

    public function getDiscard(): ?FlowStepDiscard
    {
        return $this->discard;
    }

    public function setDivisor(?int $divisor = null): self
    {
        $this->divisor = $divisor;

        return $this;
    }

    public function getDivisor(): ?int
    {
        return $this->divisor;
    }

    public function setDnsLookup(?FlowStepDnsLookup $dnsLookup = null): self
    {
        $this->dnsLookup = $dnsLookup;

        return $this;
    }

    public function getDnsLookup(): ?FlowStepDnsLookup
    {
        return $this->dnsLookup;
    }

    public function setEnabledExpression(?string $enabledExpression = null): self
    {
        $this->enabledExpression = $enabledExpression;

        return $this;
    }

    public function getEnabledExpression(): ?string
    {
        return $this->enabledExpression;
    }

    public function setErrorOnNotFound(?bool $errorOnNotFound = null): self
    {
        $this->errorOnNotFound = $errorOnNotFound;

        return $this;
    }

    public function getErrorOnNotFound(): ?bool
    {
        return $this->errorOnNotFound;
    }

    public function setExternalContent(?FlowStepExternalContent $externalContent = null): self
    {
        $this->externalContent = $externalContent;

        return $this;
    }

    public function getExternalContent(): ?FlowStepExternalContent
    {
        return $this->externalContent;
    }

    public function setExternalData(?FlowStepExternalData $externalData = null): self
    {
        $this->externalData = $externalData;

        return $this;
    }

    public function getExternalData(): ?FlowStepExternalData
    {
        return $this->externalData;
    }

    public function setExtractData(?FlowStepExtractData $extractData = null): self
    {
        $this->extractData = $extractData;

        return $this;
    }

    public function getExtractData(): ?FlowStepExtractData
    {
        return $this->extractData;
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

    public function setLdapSearch(?FlowStepLdapSearch $ldapSearch = null): self
    {
        $this->ldapSearch = $ldapSearch;

        return $this;
    }

    public function getLdapSearch(): ?FlowStepLdapSearch
    {
        return $this->ldapSearch;
    }

    public function setMailPlusApiCredentials(?MailPlusAPICredentials $mailPlusApiCredentials = null): self
    {
        $this->mailPlusApiCredentials = $mailPlusApiCredentials;

        return $this;
    }

    public function getMailPlusApiCredentials(): ?MailPlusAPICredentials
    {
        return $this->mailPlusApiCredentials;
    }

    public function setOverwriteUrlParameters(?bool $overwriteUrlParameters = null): self
    {
        $this->overwriteUrlParameters = $overwriteUrlParameters;

        return $this;
    }

    public function getOverwriteUrlParameters(): ?bool
    {
        return $this->overwriteUrlParameters;
    }

    public function setResubmitMessage(?FlowStepResubmitMessage $resubmitMessage = null): self
    {
        $this->resubmitMessage = $resubmitMessage;

        return $this;
    }

    public function getResubmitMessage(): ?FlowStepResubmitMessage
    {
        return $this->resubmitMessage;
    }

    public function setRewriteRecipient(?FlowStepRewriteRecipient $rewriteRecipient = null): self
    {
        $this->rewriteRecipient = $rewriteRecipient;

        return $this;
    }

    public function getRewriteRecipient(): ?FlowStepRewriteRecipient
    {
        return $this->rewriteRecipient;
    }

    public function setSchedule(?FlowStepSchedule $schedule = null): self
    {
        $this->schedule = $schedule;

        return $this;
    }

    public function getSchedule(): ?FlowStepSchedule
    {
        return $this->schedule;
    }

    public function setSetHeader(?FlowStepSetHeader $setHeader = null): self
    {
        $this->setHeader = $setHeader;

        return $this;
    }

    public function getSetHeader(): ?FlowStepSetHeader
    {
        return $this->setHeader;
    }

    public function setSetSender(?FlowStepSetSender $setSender = null): self
    {
        $this->setSender = $setSender;

        return $this;
    }

    public function getSetSender(): ?FlowStepSetSender
    {
        return $this->setSender;
    }

    public function setSubjectTemplate(?string $subjectTemplate = null): self
    {
        $this->subjectTemplate = $subjectTemplate;

        return $this;
    }

    public function getSubjectTemplate(): ?string
    {
        return $this->subjectTemplate;
    }

    public function setTemplate(?ObjectDescription $template = null): self
    {
        $this->template = $template;

        return $this;
    }

    public function getTemplate(): ?ObjectDescription
    {
        return $this->template;
    }

    public function setTo(?string $to = null): self
    {
        $this->to = $to;

        return $this;
    }

    public function getTo(): ?string
    {
        return $this->to;
    }

    /**
     * @param string|FlowStepType $type
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string|FlowStepType
     */
    public function getType()
    {
        return $this->type;
    }

    public function setUrlParametersTemplate(?string $urlParametersTemplate = null): self
    {
        $this->urlParametersTemplate = $urlParametersTemplate;

        return $this;
    }

    public function getUrlParametersTemplate(): ?string
    {
        return $this->urlParametersTemplate;
    }
}
