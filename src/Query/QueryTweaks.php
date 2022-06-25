<?php

/**
 * Query Tweaks class
 *
 * Tweaks the WordPress query.
 *
 * @package Somedevtips Search Query Tweaks
 * @since 1.0.0
 */

# -*- coding: utf-8 -*-
declare(strict_types=1);

namespace SomeDevTipsSearchQueryTweaks\Query;

use SomeDevTipsSearchQueryTweaks\BootstrappableInterface;

class QueryTweaks implements BootstrappableInterface
{
    public function bootstrap(): void
    {
        add_action('pre_get_posts', [$this, 'definePostTypes']);
    }

    public function definePostTypes(\WP_Query $wpQuery): void
    {
        if (is_admin() || ! $wpQuery->is_main_query() || ! $wpQuery->is_search()) {
            return;
        }

        $wpQuery->set('post_type', ['page']);
    }
}
