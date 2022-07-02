<?php

/**
 * PageBuilder class
 *
 * Builds the settings page.
 *
 * @package Somedevtips Search Query Tweaks
 * @since 1.1.0
 */

# -*- coding: utf-8 -*-
declare(strict_types=1);

namespace SomeDevTipsSearchQueryTweaks\Settings;

use SomeDevTipsSearchQueryTweaks\BootstrappableInterface;
use SomeDevTipsSearchQueryTweaks\SettingsFramework\Page;
use SomeDevTipsSearchQueryTweaks\SettingsFramework\Sections;
use SomeDevTipsSearchQueryTweaks\SettingsFramework\Options\Page as PageOptions;
use SomeDevTipsSearchQueryTweaks\SettingsFramework\Options\Section as SectionOptions;

class PageBuilder implements BootstrappableInterface
{
    public function bootstrap(): void
    {
        add_action('admin_menu', [$this, 'buildPage']);
        add_action('admin_init', [$this, 'buildSections']);
    }

    public function buildPage(): void
    {
        (new Page($this->pageOptions()))->addOptionsPage();
    }

    public function buildSections(): void
    {
        (new Sections())->add($this->sectionOptions());
    }

    private function pageOptions(): PageOptions
    {
        return (new PageOptions())
            ->setPageTitle(__(
                'SomeDevTips Search Query Options',
                'somedevtips-search-query-tweaks'
            ))
            ->setMenuTitle(__('Search Query Options', 'somedevtips-search-query-tweaks'))
            ->setMenuSlug('somedevtips-search-query-tweaks-plugin');
    }

    private function sectionOptions(): SectionOptions
    {
        return (new SectionOptions())
                ->setId('somedevtips-search-query-tweaks-options')
                ->setTitle(__('Search query post types', 'somedevtips-search-query-tweaks'))
                ->setPageSlug($this->pageOptions()->getMenuSlug())
                ->setDescription(
                    __(
                        'Select the post types to include in the search results',
                        'somedevtips-search-query-tweaks'
                    )
                );
    }
}
