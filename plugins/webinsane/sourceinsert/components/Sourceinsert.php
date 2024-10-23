<?php namespace Webinsane\Sourceinsert\Components;

use Cms\Classes\ComponentBase;

class Sourceinsert extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Sourceinsert',
            'description' => 'webinsane.sourceinsert::lang.component.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'copyright' => [
                'title'       => 'webinsane.sourceinsert::lang.component.copyrighttext',
                'type'        => 'text',
                'description' => 'webinsane.sourceinsert::lang.component.copyrightdesc',
                'default'     => '© Copyright',
            ],
            'source' => [
                'title'       => 'webinsane.sourceinsert::lang.component.sourcetext',
                'description' => 'webinsane.sourceinsert::lang.component.sourcedesc',
                'type'        => 'text',
                'default'     => 'Source:',
            ],
            'smarturl' => [
                'title'       => 'webinsane.sourceinsert::lang.component.smarturl',
                'description' => 'webinsane.sourceinsert::lang.component.smarturldesc',
                'type'        => 'checkbox',
                'default'     => '1',
            ],
            'simpleurl' => [
                'title'       => 'webinsane.sourceinsert::lang.component.simpleurl',
                'description' => 'webinsane.sourceinsert::lang.component.simpleurldesc',
                'type'        => 'text',
                'default'     => 'https://yoursite.com',
            ],
        ];
    }
}
