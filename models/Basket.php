<?php namespace Macrobit\Demo\Models;

use Model;

/**
 * Basket Model
 */
class Basket extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'macrobit_demo_baskets';

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
    public $hasMany = [
        'balls' => ['Macrobit\Demo\Models\Ball']
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}