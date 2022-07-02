<?php

/**
 * Page class
 *
 * Manages a settings page.
 *
 * @package Somedevtips Search Query Tweaks
 * @since 1.1.0
 */

# -*- coding: utf-8 -*-
declare(strict_types=1);

namespace SomeDevTipsSearchQueryTweaks\SettingsFramework;

use SomeDevTipsSearchQueryTweaks\BootstrappableInterface;
use SomeDevTipsSearchQueryTweaks\SettingsFramework\Options\Page as PageOptions;

class Page implements BootstrappableInterface, RenderableInterface
{
    /**
     * @var PageOptions
     */
    private $pageOptions;

    public function __construct(PageOptions $pageOptions)
    {
        $this->pageOptions = $pageOptions;
    }

    public function bootstrap(): void
    {
        add_action('admin_menu', [$this, 'addOptionsPage']);
    }

    public function addOptionsPage(): void
    {
        add_options_page(
            $this->pageOptions->getPageTitle(),
            $this->pageOptions->getMenuTitle(),
            'manage_options',
            $this->pageOptions->getMenuSlug(),
            [$this, 'render'],
            $this->pageOptions->getMenuPosition()
        );
    }

    public function render(): void
    {
        ?>
        <div class="wrap">
            <h1><?= esc_html($this->pageOptions->getMenuTitle()) ?></h1>
            <form action="options.php" method="post">
                <?php
                    settings_fields($this->pageOptions->getMenuSlug());
                    do_settings_sections($this->pageOptions->getMenuSlug());

                    submit_button(__('Save', 'somedevtips-search-query-tweaks'));
                ?>
            </form>
        </div>
        <?php
    }
}