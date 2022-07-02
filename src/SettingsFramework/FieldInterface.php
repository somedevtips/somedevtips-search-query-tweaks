<?php

/**
 * FieldInterface interface
 *
 * Defines the basic structure of a settings field.
 *
 * @package Somedevtips Search Query Tweaks
 * @since 1.1.0
 */

# -*- coding: utf-8 -*-
declare(strict_types=1);

namespace SomeDevTipsSearchQueryTweaks\SettingsFramework;

interface FieldInterface
{
    public function getOptionName(): string;

    public function getOptionGroup(): string;

    public function getTitle(): string;

    public function getType(): string;

    public function getDescription(): string;

    public function getShowInRest();

    public function getDefaultValue();

    public function getCssClass(): string;

    public function renderCallback(): void;

    public function sanitizeCallback(): void;
}
