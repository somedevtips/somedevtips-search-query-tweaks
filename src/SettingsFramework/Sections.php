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

namespace SomeDevTipsSearchQueryTweaks\SettingsFramework;

use SomeDevTipsSearchQueryTweaks\SettingsFramework\Options\Section as SectionOptions;

class Sections
{
    public function add(SectionOptions $sectionOptions): void
    {
        add_settings_section(
            $sectionOptions->getId(),
            $sectionOptions->getTitle(),
            [(new Section($sectionOptions)), 'render'],
            $sectionOptions->getPageSlug()
        );
    }
}
