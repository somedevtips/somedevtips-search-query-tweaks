<?php

/**
 * Bootstrappableinterface
 *
 * Interface implemented by all classes involved in plugin boostrap.
 *
 * @package Somedevtips Search Query Tweaks
 * @since 1.0.0
 */

# -*- coding: utf-8 -*-
declare(strict_types=1);

namespace SomeDevTipsSearchQueryTweaks;

interface BootstrappableInterface
{
    public function bootstrap(): void;
}
