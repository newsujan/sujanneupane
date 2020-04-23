<?php namespace Sujanneupane\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSujanneupaneProjects extends Migration
{
    public function up()
    {
        Schema::create('sujanneupane_projects_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('project')->nullable();
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sujanneupane_projects_');
    }
}
