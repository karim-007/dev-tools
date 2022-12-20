<?php

namespace Karim007\DevTools\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @method static removeController($name)
 * @method static removeModel($name)
 */
class AdvanceDevTool extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'advanceDevtool';
    }
}
