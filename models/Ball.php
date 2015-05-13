<?php namespace Macrobit\Demo\Models;

use Model;

/**
 * Ball Model
 */
class Ball extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'macrobit_demo_balls';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'basket' => ['Macrobit\Demo\Models\Basket']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}