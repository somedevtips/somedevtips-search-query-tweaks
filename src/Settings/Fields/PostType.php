<?php

/**
 * PostType class
 *
 * Manages the PostType settings field.
 *
 * @package Somedevtips Search Query Tweaks
 * @since 1.1.0
 */

# -*- coding: utf-8 -*-
declare(strict_types=1);

namespace SomeDevTipsSearchQueryTweaks\Settings\Fields;

use SomeDevTipsSearchQueryTweaks\SettingsFramework\FieldInterface;
use SomeDevTipsSearchQueryTweaks\SettingsFramework\FieldTrait;

class PostType implements FieldInterface
{
    use FieldTrait;

    public function getOptionGroup(): string
    {
        // TODO: Implement getOptionGroup() method.
    }

    public function getTitle(): string
    {
        // TODO: Implement getTitle() method.
    }

    public function renderCallback(): void
    {
        // TODO: Implement renderCallback() method.
    }

    public function getOptionName(): string
    {
        // TODO: Implement getOptionName() method.
    }

    public function getType(): string
    {
        // TODO: Implement getType() method.
    }

    public function getDescription(): string
    {
        // TODO: Implement getDescription() method.
    }

    public function sanitizeCallback(): void
    {
        // TODO: Implement sanitizeCallback() method.
    }
}