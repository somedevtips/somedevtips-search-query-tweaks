<?php

/**
 * Section class
 *
 * Manages the options of a section.
 *
 * @package Somedevtips Search Query Tweaks
 * @since 1.1.0
 */

# -*- coding: utf-8 -*-
declare(strict_types=1);

namespace SomeDevTipsSearchQueryTweaks\Settings\Options;

class Section
{
    /**
     * @var string
     */
    private $id = '';

    /**
     * @var string
     */
    private $title = '';

    /**
     * @var string
     */
    private $pageSlug = '';

    /**
     * @var string
     */
    private $description = '';

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Section
     */
    public function setId(string $id): Section
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Section
     */
    public function setTitle(string $title): Section
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getPageSlug(): string
    {
        return $this->pageSlug;
    }

    /**
     * @param string $pageSlug
     * @return Section
     */
    public function setPageSlug(string $pageSlug): Section
    {
        $this->pageSlug = $pageSlug;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Section
     */
    public function setDescription(string $description): Section
    {
        $this->description = $description;
        return $this;
    }
}
