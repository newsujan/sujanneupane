<?php namespace Sujanneupane\Certificate\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSujanneupaneCertificate extends Migration
{
    public function up()
    {
        Schema::create('sujanneupane_certificate_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('detail')->nullable();
            $table->text('description')->nullable();
            $table->text('link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sujanneupane_certificate_');
    }
}
