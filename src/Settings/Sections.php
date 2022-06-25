<?php

/**
 * Sections class
 *
 * Manages all sections of the settings page.
 *
 * @package Somedevtips Search Query Tweaks
 * @since 1.1.0
 */

# -*- coding: utf-8 -*-
declare(strict_types=1);

namespace SomeDevTipsSearchQueryTweaks\Settings;

class Sections implements RenderableInterface
{
    public function render(): void
    {
        echo 'Sections';
    }
}