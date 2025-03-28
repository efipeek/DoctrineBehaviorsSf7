<?php

declare(strict_types=1);

namespace Knp\DoctrineBehaviors\Contract\Entity;

interface BlameableInterface
{
    public function setCreatedBy(object|int|string $user): void;

    public function setUpdatedBy(object|int|string $user): void;

    public function setDeletedBy(object|int|string $user): void;

    public function getCreatedBy(): null|object|int|string;

    public function getUpdatedBy(): null|object|int|string;

    public function getDeletedBy(): object|int|string|null;
}
