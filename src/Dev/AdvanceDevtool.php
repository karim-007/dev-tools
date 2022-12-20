<?php

namespace Karim007\DevTools\Dev;

use Carbon\Carbon;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Foundation\Application;

class AdvanceDevtool
{

    public function rController($name)
    {
        try {
            $controllerName = $name.'.php';
            $controllerPath = base_path('app/Http/Controllers/').$controllerName;
            if(file_exists($controllerPath)){
                unlink($controllerPath);
                return $this->getResponse("Controller removed successfully.",'success');
            }else{
                return $this->getResponse("No controller found.",'fail');
            }
        }catch (\Exception $e){
            return $this->getResponse("Something went wrong",'fail');
        }
    }

    public function removeModel($name)
    {
        try {
            $modelName = $name.'.php';
            $modelPath = base_path('app/Http/Controllers/').$modelName;
            if(file_exists($modelPath)){
                unlink($modelPath);
                return $this->getResponse("Model removed successfully.",'success');
            }else{
                return $this->getResponse("No model found.",'fail');
            }
        }catch (\Exception $e){
            return $this->getResponse("Something went wrong",'fail');
        }
    }

    private function getResponse($message,$status=null){
        $type = config("devtool.response_type");
        if ($type == 'json') return response()->json(['status'=>$status,'message'=>$message],200);
        else return $message;
    }

}
