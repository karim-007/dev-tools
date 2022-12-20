<?php
namespace Karim007\DevTools\Controllers;
use Illuminate\Http\Request;
use Karim007\DevTools\Facade\DevTool;
class DevToolController
{
    /**
     * @var string $access_granded
     */
    protected $access_granded=false;

    public function __construct()
    {
        if (config("devtool.access_code") == \request('access_code')){
            $this->access_granded = true;
        }
    }

    public function clear($access_code)
    {
        if (!$this->access_granded) return DevTool::accessDenied();
        else return DevTool::clear();
    }
    public function migration($access_code)
    {
        if (!$this->access_granded) return DevTool::accessDenied();
        else return DevTool::migration();
    }
    public function passportInstall($access_code)
    {
        if (!$this->access_granded) return DevTool::accessDenied();
        else return DevTool::passportInstall();
    }
    public function maintainMode($access_code)
    {
        if (!$this->access_granded) return DevTool::accessDenied();
        else return DevTool::maintainMode();
    }
    public function liveMode($access_code)
    {
        if (!$this->access_granded) return DevTool::accessDenied();
        else  return DevTool::liveMode();
    }
    public function storageLink($access_code)
    {
        if (!$this->access_granded) return DevTool::accessDenied();
        else  return DevTool::storageLink();
    }
}
