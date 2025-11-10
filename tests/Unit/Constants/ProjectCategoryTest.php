<?php

use App\Constants\ProjectCategory;

test('has correct category constants', function () {
    expect(ProjectCategory::E_COMMERCE)->toBe('e-commerce')
        ->and(ProjectCategory::MOBILE)->toBe('mobile')
        ->and(ProjectCategory::CLOUD)->toBe('cloud')
        ->and(ProjectCategory::EDUCATION)->toBe('education')
        ->and(ProjectCategory::SAAS)->toBe('saas')
        ->and(ProjectCategory::ANALYTICS)->toBe('analytics');
});

test('all constant returns all categories', function () {
    $categories = ProjectCategory::ALL;

    expect($categories)->toBeArray()
        ->toHaveCount(6)
        ->toHaveKey('e-commerce')
        ->toHaveKey('mobile');
});

test('is valid returns true for valid category', function () {
    expect(ProjectCategory::isValid('e-commerce'))->toBeTrue()
        ->and(ProjectCategory::isValid('mobile'))->toBeTrue()
        ->and(ProjectCategory::isValid('cloud'))->toBeTrue();
});

test('is valid returns false for invalid category', function () {
    expect(ProjectCategory::isValid('invalid'))->toBeFalse()
        ->and(ProjectCategory::isValid(''))->toBeFalse();
});

test('get icon returns string for valid category', function () {
    $icon = ProjectCategory::getIcon('e-commerce');

    expect($icon)->toBeString()
        ->toContain('<svg');
});

test('get icon returns default for invalid category', function () {
    $icon = ProjectCategory::getIcon('invalid');

    expect($icon)->toBeString()
        ->toContain('<svg');
});
