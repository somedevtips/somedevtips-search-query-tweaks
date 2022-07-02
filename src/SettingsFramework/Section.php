<?php

/**
 * Section class
 *
 * Manages a settings section.
 *
 * @package Somedevtips Search Query Tweaks
 * @since 1.1.0
 */

# -*- coding: utf-8 -*-
declare(strict_types=1);

namespace SomeDevTipsSearchQueryTweaks\SettingsFramework;

use SomeDevTipsSearchQueryTweaks\SettingsFramework\Options\Section as SectionOptions;

class Section implements RenderableInterface
{
    /**
     * @var SectionOptions
     */
    private $options;

    public function __construct(SectionOptions $sectionOptions)
    {
        $this->options = $sectionOptions;
    }

    public function addField(): void
    {

    }

    public function render(): void
    {
        ?>
        <p><?= esc_html($this->options->getDescription()); ?></p>
        <?php
    }
}
