<?php

/**
 * Bootstrap management class
 *
 * Manages the plugin bootstrap process.
 *
 * @package Somedevtips Search Query Tweaks
 * @since 1.0.0
 */

# -*- coding: utf-8 -*-
declare(strict_types=1);

namespace SomeDevTipsSearchQueryTweaks;

use SomeDevTipsSearchQueryTweaks\Query\QueryTweaks;

class Bootstrapper
{
    /**
     * @var array
     */
    private $modules;

    public function __construct()
    {
        $this->modules = [];
    }

    /**
     * Boostraps the plugin.
     *
     * Checks the php version, loads and bootstraps modules.
     *
     * @since  1.0.0
     * @return void
     */
    public function bootstrap(): void
    {
        $this->loadModules();

        $bootstrappables = array_filter(
            $this->modules,
            static function (object $module): bool {
                return $module instanceof BootstrappableInterface;
            }
        );

        foreach ($bootstrappables as $module) {
            $module->bootstrap();
        }
    }

    /**
     * Loads all plugin modules.
     *
     * @since  1.0.0
     * @return void
     */
    protected function loadModules(): void
    {
        $this->modules[QueryTweaks::class] = new QueryTweaks();
    }
}
