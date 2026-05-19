<?php

use Illuminate\Support\Facades\Route;
use Modulatte\Core\Http\Controllers\Front\News\NewsArchiveController;
use Modulatte\Core\Http\Controllers\Front\News\NewsDetailController;
use Modulatte\Core\Http\Controllers\Front\News\NewsIndexController;
use Modulatte\Core\Http\Controllers\Front\PageController;
use Modulatte\Core\Http\Controllers\Front\SiteMapController;

Route::get('/sitemap.xml', SiteMapController::class)->name('sitemap');
Route::get('/statics/{name}', [App\Http\Controllers\Controller::class, 'statics']);
/**
 * Form Submissions
 */
Route::post('form-submission', [PageController::class, 'formSubmission'])->name('contact.form.submission');

if (config('modulatte.news.enabled')) {
    Route::get('/news', NewsIndexController::class)->name('news.index');
    Route::get('/news/{slug}', NewsDetailController::class)->name('news.detail');
    Route::get('/news/archive/{slug}', NewsArchiveController::class)->name('news.archive');
}

Route::get('/{slug?}', PageController::class)
    ->where('slug', '^(?!news|shop).*$')
    ->name('page.show');
