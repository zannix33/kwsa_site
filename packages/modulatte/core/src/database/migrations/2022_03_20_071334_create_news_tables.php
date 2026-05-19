<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateNewsTables extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->text('headline')->nullable();
            $table->longText('content')->nullable();
            if (seoEnabled()) {
                createDefaultSEOFields($table);
            }
            $table->timestamp('display_date')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('news_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'news');
        });

        Schema::create('news_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'news');
        });

        Schema::create('news_categories', function (Blueprint $table) {
            createDefaultTableFields($table);
            if (seoEnabled()) {
                createDefaultSEOFields($table);
            }
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('news_category_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'news_category');
        });

        Schema::create('news_news_category', function (Blueprint $table) {
            createDefaultRelationshipTableFields($table, 'news_category', 'news');
            $table->integer('position')->default(0)->index();
        });
    }

    public function down()
    {
        Schema::dropIfExists('news_revisions');
        Schema::dropIfExists('news_translations');
        Schema::dropIfExists('news_slugs');
        Schema::dropIfExists('news');
    }
}
