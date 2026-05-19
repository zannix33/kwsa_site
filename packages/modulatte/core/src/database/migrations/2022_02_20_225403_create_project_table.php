<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modulatte\Project\Concepts\ProjectSettings;

class CreateProjectTable extends Migration
{
    public function up()
    {
        //if (ProjectSettings::hasProjects(true)) {
        Schema::create('projects', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->longText('content')->nullable();
            if (seoEnabled()) {
                createDefaultSEOFields($table);
            }
            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();
            $table->nestedSet();
        });

        Schema::create('project_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'project');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('project_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'project');
        });

        Schema::create('project_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'project');
        });

        Schema::create('project_categories', function (Blueprint $table) {
            createDefaultTableFields($table);
            if (seoEnabled()) {
                createDefaultSEOFields($table);
            }
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('project_category_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'project_category');
        });

        Schema::create('project_project_category', function (Blueprint $table) {
            createDefaultRelationshipTableFields($table, 'project_category', 'project');
        });
        //}
    }
}
