<?php
namespace Karim007\DevTools\Controllers;
use Illuminate\Http\Request;
use Karim007\DevTools\Facade\DevTool;
class DevToolController
{
    public function clear()
    {
        return DevTool::clear();
    }
    public function migration()
    {
        return DevTool::migration();
    }
    public function passportInstall()
    {
        return DevTool::passportInstall();
    }
    public function maintainMode()
    {
        return DevTool::maintainMode();
    }
    public function liveMode()
    {
        return DevTool::liveMode();
    }
    public function storageLink()
    {
        return DevTool::storageLink();
    }
}
