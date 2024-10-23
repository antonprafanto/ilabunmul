<?php namespace Webinsane\SourceInsert;

use Webinsane\Sourceinsert\Models\Settings;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'webinsane.sourceinsert::lang.plugin.name',
            'description' => 'webinsane.sourceinsert::lang.plugin.description',
            'author' => 'Webinsane',
            'icon' => 'oc-icon-copyright',
            'homepage' => 'https://webinsane.pro'
        ];
    }

    public function registerComponents()
    {
        return [
            'Webinsane\Sourceinsert\Components\Sourceinsert' => 'SourceInsert',
        ];
    }

    public function registerSettings()
    {
    }
}
