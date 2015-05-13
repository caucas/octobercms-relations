<?php namespace Macrobit\Demo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateBallsTable extends Migration
{

    public function up()
    {
        Schema::create('macrobit_demo_balls', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('color');
            $table->integer('basket_id')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('macrobit_demo_balls');
    }

}
