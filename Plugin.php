<?php namespace Macrobit\Demo;

use System\Classes\PluginBase;
use Backend;

/**
 * Demo Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Demo',
            'description' => 'No description provided yet...',
            'author'      => 'Macrobit',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerNavigation()
    {
        return [
            'demo' => [
                'label'         =>  'Baketball',
                'url'           =>  Backend::url('macrobit/demo/balls'),
                'icon'          =>  'icon-globe',
                'order'         =>  500,

                'sideMenu'  =>  [
                    'balls' =>  [
                        'label'         =>  'Balls',
                        'url'           =>  Backend::url('macrobit/demo/balls'),
                        'icon'          =>  'icon-globe'
                    ],
                    'baskets' =>  [
                        'label'         =>  'Baskets',
                        'url'           =>  Backend::url('macrobit/demo/baskets'),
                        'icon'          =>  'icon-globe'
                    ]
                ]
            ]
        ];
    }

}
