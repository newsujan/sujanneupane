<?php namespace Sujanneupane\Experience\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSujanneupaneExperience extends Migration
{
    public function up()
    {
        Schema::create('sujanneupane_experience_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('position')->nullable();
            $table->text('year')->nullable();
            $table->text('company')->nullable();
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sujanneupane_experience_');
    }
}
