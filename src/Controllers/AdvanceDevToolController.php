<?php
namespace Karim007\DevTools\Controllers;
use Illuminate\Http\Request;
use Karim007\DevTools\Facade\AdvanceDevTool;
class AdvanceDevToolController
{
    public function removeController($name)
    {
        return AdvanceDevTool::removeController($name);
    }

    public function removeModel($name)
    {
        return AdvanceDevTool::removeModel($name);
    }
}
