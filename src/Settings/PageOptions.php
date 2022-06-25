<?php

/**
 * PageOptions class
 *
 * Manages the options of a settings page.
 *
 * @package Somedevtips Search Query Tweaks
 * @since 1.1.0
 */

# -*- coding: utf-8 -*-
declare(strict_types=1);

namespace SomeDevTipsSearchQueryTweaks\Settings;

class PageOptions
{
    /**
     * @var string
     */
    private $pageTitle = '';

    /**
     * @var string
     */
    private $menuTitle = '';

    /**
     * @var string
     */
    private $menuSlug = '';

    /**
     * @var int|null
     */
    private $menuPosition = null;

    /**
     * @return string
     */
    public function getPageTitle(): string
    {
        return $this->pageTitle;
    }

    /**
     * @param string $pageTitle
     * @return PageOptions
     */
    public function setPageTitle(string $pageTitle): PageOptions
    {
        $this->pageTitle = $pageTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getMenuTitle(): string
    {
        return $this->menuTitle;
    }

    /**
     * @param string $menuTitle
     * @return PageOptions
     */
    public function setMenuTitle(string $menuTitle): PageOptions
    {
        $this->menuTitle = $menuTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getMenuSlug(): string
    {
        return $this->menuSlug;
    }

    /**
     * @param string $menuSlug
     * @return PageOptions
     */
    public function setMenuSlug(string $menuSlug): PageOptions
    {
        $this->menuSlug = $menuSlug;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMenuPosition(): ?int
    {
        return $this->menuPosition;
    }

    /**
     * @param int|null $menuPosition
     * @return PageOptions
     */
    public function setMenuPosition(?int $menuPosition): PageOptions
    {
        $this->menuPosition = $menuPosition;
        return $this;
    }
}
