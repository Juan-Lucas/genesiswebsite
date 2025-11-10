<?php

namespace App\Constants;

class ProjectStatus
{
    public const DRAFT = 'draft';

    public const PUBLISHED = 'published';

    public const ARCHIVED = 'archived';

    public const ALL = [
        self::DRAFT,
        self::PUBLISHED,
        self::ARCHIVED,
    ];

    public static function isValid(string $status): bool
    {
        return in_array($status, self::ALL, true);
    }
}
