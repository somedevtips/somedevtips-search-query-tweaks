<?php

/**
 * FieldInterface interface
 *
 * Defines the basic structure of a settings field.
 *
 * @package Somedevtips Search Query Tweaks
 * @since 1.1.0
 */

# -*- coding: utf-8 -*-
declare(strict_types=1);

namespace SomeDevTipsSearchQueryTweaks\SettingsFramework;

trait FieldTrait
{
    public function getCssClass(): string
    {
        return '';
    }

    public function getShowInRest()
    {
        return false;
    }

    public function getDefaultValue()
    {
        return '';
    }

    abstract public function getOptionName(): string;

    abstract public function getType(): string;

    abstract public function getDescription(): string;

    abstract public function sanitizeCallback(): void;

    private function addSettingsFieldsArgs(): array
    {
        $args = [];

        $optionName = $this->getOptionName();
        if ($optionName) {
            $args['label_for'] = $optionName;
        }

        $cssClass = $this->getCssClass();
        if ($cssClass) {
            $args['class'] = $cssClass;
        }

        return $args;
    }

    private function getRegisterSettingArgs(): array
    {
        $args = [];

        $showInRest = $this->getShowInRest();
        if ($showInRest) {
            $args['show_in_rest'] = $this->getShowInRest();
            $args['type'] = $this->getType();
            $args['description'] = $this->getDescription();
        }
        $args['sanitize_callback'] = [$this, 'sanitizeCallback'];
        $args['default'] = $this->getDefaultValue();

        return $args;
    }
}
