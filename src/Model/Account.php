<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Model;

/**
 * Account.
 */
class Account implements ModelInterface
{
    /**
     * The account ID.
     * @var string|null
     */
    private $id;

    /**
     * The account type.
     * @var string
     */
    private $type;

    /**
     * Description of the account.
     * @var string
     */
    private $description;

    /**
     * The locale for the account.
     * @var string|null
     */
    private $locale;

    /**
     * The time region for the account (e.g. Europe/Amsterdam).
     * @var string|null
     */
    private $timeRegion;

    /**
     * The end date for the account.
     * @var \DateTimeInterface|null
     */
    private $accountEnds;

    public function setId(?string $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setLocale(?string $locale = null): self
    {
        $this->locale = $locale;

        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setTimeRegion(?string $timeRegion = null): self
    {
        $this->timeRegion = $timeRegion;

        return $this;
    }

    public function getTimeRegion(): ?string
    {
        return $this->timeRegion;
    }

    public function setAccountEnds(?\DateTimeInterface $accountEnds = null): self
    {
        $this->accountEnds = $accountEnds;

        return $this;
    }

    public function getAccountEnds(): ?\DateTimeInterface
    {
        return $this->accountEnds;
    }
}
