<?php namespace Macrobit\Demo\Updates;

use October\Rain\Database\Updates\Seeder;
use Macrobit\Demo\Models\Ball;

class SeedAllTables extends Seeder
{
    public function run()
    {
        Ball::insert([
            ['color' => 'red'],
            ['color' => 'white'],
            ['color' => 'black'],
            ['color' => 'blue'],
            ['color' => 'green'],
            ['color' => 'yellow']
        ]);
    }
}
