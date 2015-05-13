<?php namespace Macrobit\Demo\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Balls Back-end Controller
 */
class Balls extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Macrobit.Demo', 'demo', 'balls');
    }
}