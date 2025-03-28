<?php

declare(strict_types=1);

namespace Knp\DoctrineBehaviors\Model\Blameable;

trait BlameableMethodsTrait
{
    public function setCreatedBy(object|int|string $user): void
    {
        $this->createdBy = $user;
    }

    public function setUpdatedBy(object|int|string $user): void
    {
        $this->updatedBy = $user;
    }

    public function setDeletedBy(object|int|string $user): void
    {
        $this->deletedBy = $user;
    }

    public function getCreatedBy(): null|object|int|string
    {
        return $this->createdBy;
    }

    public function getUpdatedBy(): null|object|int|string
    {
        return $this->updatedBy;
    }

    public function getDeletedBy(): null|object|int|string
    {
        return $this->deletedBy;
    }
}
