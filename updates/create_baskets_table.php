<?php namespace Macrobit\Demo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateBasketsTable extends Migration
{

    public function up()
    {
        Schema::create('macrobit_demo_baskets', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('macrobit_demo_baskets');
    }

}
