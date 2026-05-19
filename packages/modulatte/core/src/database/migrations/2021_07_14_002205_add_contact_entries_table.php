<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContactEntriesTable extends Migration
{
    public function up()
    {
        Schema::create('contact_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('full_name')->nullable();
            $table->string('company')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('subject')->nullable();
            $table->string('form')->default('Contact Form');
            $table->text('message')->nullable();
            $table->json('data')->nullable();
            $table->timestamps();
        });
    }
}
