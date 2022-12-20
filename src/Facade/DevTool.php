<?php

namespace Karim007\DevTools\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @method static clear()
 * @method static migration()
 * @method static passportInstall()
 * @method static maintainMode()
 * @method static liveMode()
 * @method static storageLink()
 * @method static removeController($name)
 */
class DevTool extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'devtool';
    }
}
