<?php

use App\Constants\ProjectStatus;

test('has correct status constants', function () {
    expect(ProjectStatus::DRAFT)->toBe('draft')
        ->and(ProjectStatus::PUBLISHED)->toBe('published')
        ->and(ProjectStatus::ARCHIVED)->toBe('archived');
});

test('all constant returns all statuses', function () {
    $statuses = ProjectStatus::ALL;

    expect($statuses)->toBeArray()
        ->toHaveCount(3)
        ->toContain('draft', 'published', 'archived');
});

test('is valid returns true for valid status', function () {
    expect(ProjectStatus::isValid('draft'))->toBeTrue()
        ->and(ProjectStatus::isValid('published'))->toBeTrue()
        ->and(ProjectStatus::isValid('archived'))->toBeTrue();
});

test('is valid returns false for invalid status', function () {
    expect(ProjectStatus::isValid('invalid'))->toBeFalse()
        ->and(ProjectStatus::isValid(''))->toBeFalse()
        ->and(ProjectStatus::isValid('pending'))->toBeFalse();
});
