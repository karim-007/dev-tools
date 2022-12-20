<?php
namespace Karim007\DevTools\Controllers;
use Illuminate\Http\Request;
use Karim007\DevTools\Facade\AdvanceDevTool;

class AdvanceDevToolController
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
    public function removeController($name,$access_code)
    {
        if (!$this->access_granded) return $this->getResponse();
        else return AdvanceDevTool::rController($name);
    }

    public function removeModel($name,$access_code)
    {
        if (!$this->access_granded) return $this->getResponse();
        else return AdvanceDevTool::removeModel($name);
    }

    private function getResponse(){
        $type = config("devtool.response_type");
        if ($type == 'json') return response()->json(['status'=>'fail','message'=>'Invalid Access code'],200);
        else return 'Invalid Access code';
    }
}
