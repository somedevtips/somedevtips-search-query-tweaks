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

namespace SomeDevTipsSearchQueryTweaks\Settings;

use SomeDevTipsSearchQueryTweaks\BootstrappableInterface;

class Page implements BootstrappableInterface, RenderableInterface
{
    /**
     * @var PageOptions
     */
    private $pageOptions;

    /**
     * @var Sections
     */
    private $sections;

    public function __construct(PageOptions $pageOptions, Sections $sections)
    {
        $this->sections = $sections;
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
            <h1><?= $this->pageOptions->getMenuTitle() ?></h1>
            <form action="options.php" method="post">
                <?php $this->sections->render(); ?>
                <input name="submit" class="button button-primary" type="submit" value="<?php esc_attr_e( 'Save' ); ?>" />
            </form>
        </div>
        <?php
    }
}