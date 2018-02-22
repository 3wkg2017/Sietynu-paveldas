<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetUpBasicDBs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function($table)
        {
            $table->increments('id');
            $table->string('type'); // About / Articles / Links 
            $table->string('title');
            $table->longText('text');
            $table->string('image');
            $table->string('file'); 
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('catalog', function($table)
        {
            $table->increments('id');
            $table->string('title'); 
            $table->string('address');
            $table->string('style');
            $table->string('type');
            $table->string('code');
            $table->integer('countryId');
            $table->string('material');
            $table->string('size');
            $table->string('date');
            $table->longText('text');
            $table->string('image');
            $table->string('file'); 
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('images', function($table)
        {
            $table->increments('id');
            $table->string('catalog_id'); 
            $table->string('image');
            $table->string('title'); 
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('references', function($table)
        {
            $table->increments('id');
            $table->string('catalog_id'); 
            $table->string('link'); 
            $table->rememberToken();
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
        Schema::dropIfExists('catalog');
        Schema::dropIfExists('images');
        Schema::dropIfExists('references');
    }
}
