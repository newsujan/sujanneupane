<?php namespace Sujanneupane\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSujanneupaneContact extends Migration
{
    public function up()
    {
        Schema::create('sujanneupane_contact_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('details')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sujanneupane_contact_');
    }
}
