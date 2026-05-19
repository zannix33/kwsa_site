<?php

use Illuminate\Support\Facades\Route;
use Modulatte\Core\Http\Controllers\Admin\ContactEntryController;

Route::module('pages');
Route::module('contactEntries');
Route::module('projects');
Route::module('news');
Route::module('newsCategories');

Route::get('contact-entries/export/generate', [ContactEntryController::class, 'exportContactEntries'])->name('contact-entries.export');
