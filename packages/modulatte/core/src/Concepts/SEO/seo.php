<?php

use A17\Twill\Repositories\SettingRepository;
use Modulatte\Core\Concepts\SEO\SEOSettings;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;

if (!function_exists('seoEnabled')) {
    function seoEnabled(): bool
    {
        return SEOSettings::$hasSeo;
    }
}

if (!function_exists('createDefaultSEOFields')) {
    function createDefaultSEOFields($table)
    {
        $table->string('seo_title', 100)->nullable();
        $table->text('seo_description', 200)->nullable();
        $table->text('seo_keywords', 300)->nullable();
        $table->text('seo_canonical_url', 300)->nullable();
    }
}

if (!function_exists('buildSEOForItem')) {
    function buildSEOForItem($item): void
    {
        $prefix = app(SettingRepository::class)->byKey('seo_prefix');
        $suffix = app(SettingRepository::class)->byKey('seo_suffix');

        SEOMeta::setTitle($prefix . ' ' . $item->seo_title . ' ' . $suffix);
        SEOMeta::setDescription($item->seo_description ?? '');
        SEOMeta::setKeywords($item->seo_keywords);
        SEOMeta::setCanonical($item->seo_canonical_url);

        OpenGraph::setTitle($prefix . ' ' . $item->seo_title . ' ' . $suffix);
        OpenGraph::setDescription($item->seo_description ?? '');

        JsonLd::setTitle($prefix . ' ' . $item->seo_title . ' ' . $suffix);
        JsonLd::setDescription($item->seo_description ?? '');
    }
}

if (!function_exists('buildSEOForIndex')) {
    function buildSEOForIndex($title, $description): void
    {
        $prefix = app(SettingRepository::class)->byKey('seo_prefix');
        $suffix = app(SettingRepository::class)->byKey('seo_suffix');

        SEOMeta::setTitle($prefix . ' ' . $title . ' ' . $suffix);
        SEOMeta::setDescription($description ?? '');

        OpenGraph::setTitle($prefix . ' ' . $title . ' ' . $suffix);
        OpenGraph::setDescription($description ?? '');

        JsonLd::setTitle($prefix . ' ' . $title . ' ' . $suffix);
        JsonLd::setDescription($description ?? '');
    }
}
