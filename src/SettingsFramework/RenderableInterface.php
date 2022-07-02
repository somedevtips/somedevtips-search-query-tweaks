<?php

/**
 * RenderableInterface
 *
 * Interface implemented by all classes that render output.
 *
 * @package Somedevtips Search Query Tweaks
 * @since 1.1.0
 */

# -*- coding: utf-8 -*-
declare(strict_types=1);

namespace SomeDevTipsSearchQueryTweaks\SettingsFramework;

interface RenderableInterface
{
    public function render(): void;
}
