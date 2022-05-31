<?php

declare(strict_types=1);

/*
 * This file is part of the Flowmailer PHP SDK package.
 * Copyright (c) 2021 Flowmailer BV
 */

namespace Flowmailer\API\Collection;

use Doctrine\Common\Collections\ArrayCollection;
use Flowmailer\API\Parameter\ReferenceRange;

class NextRangeHolderCollection extends ArrayCollection implements NextRangeHolderCollectionInterface
{
    /**
     * @var ReferenceRange|null
     */
    private $nextRange;

    public function getNextRange(): ?ReferenceRange
    {
        return $this->nextRange;
    }

    /**
     * @return $this
     */
    public function setNextRange(?ReferenceRange $nextRange = null): NextRangeHolderCollectionInterface
    {
        $this->nextRange = $nextRange;

        return $this;
    }
}
