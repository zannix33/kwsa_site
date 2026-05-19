<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTables extends Migration
{
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            createDefaultTableFields($table);
            createFormAndViewFields($table);
            $table->string('title', 200)->nullable();
            $table->json('data')->nullable();
            if (seoEnabled()) {
                createDefaultSEOFields($table);
            }
            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();
            $table->integer('position')->default(0)->nullable();
            $table->json('location')->nullable();
            $table->nestedSet();
        });

        Schema::create('page_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'page');
            $table->string('title', 200)->nullable();
        });

        Schema::create('page_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'page');
        });

        Schema::create('page_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'page');
        });
    }
}
