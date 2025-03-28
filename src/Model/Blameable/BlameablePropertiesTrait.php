<?php

declare(strict_types=1);

namespace Knp\DoctrineBehaviors\Model\Blameable;

trait BlameablePropertiesTrait
{
    protected null|string|int|object $createdBy = null;

    protected null|string|int|object $updatedBy = null;

    protected null|string|int|object $deletedBy = null;
}
