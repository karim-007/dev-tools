<?php

namespace Karim007\DevTools\Dev;

use Carbon\Carbon;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Foundation\Application;

class Devtool
{
    public function clear()
    {
        try {
            Artisan::call('cache:clear');
            Artisan::call('route:clear');
            Artisan::call('config:clear');
            Artisan::call('view:clear');
            Artisan::call('optimize:clear');
            return $this->getResponse("Clear is success",'success');
        }catch (\Exception $e){
            return $this->getResponse("Something went wrong",'fail');
        }
    }

    public function migration()
    {
        try {
            Artisan::call('migrate');
            return $this->getResponse("Migration is success",'success');
        }catch (\Exception $e){
            return $this->getResponse("Something went wrong",'fail');
        }
    }

    public function passportInstall()
    {
        try {
            Artisan::call('passport:install');
            return $this->getResponse("Passport install success",'success');
        }catch (\Exception $e){
            return $this->getResponse("Something went wrong",'fail');
        }
    }

    public function maintainMode()
    {
        try {
            Artisan::call('down');
            return $this->getResponse("Maintain mode on",'success');
        }catch (\Exception $e){
            return $this->getResponse("Something went wrong",'fail');
        }
    }
    public function liveMode()
    {
        try {
            Artisan::call('up');
            return $this->getResponse("Project is now live",'success');
        }catch (\Exception $e){
            return $this->getResponse("Something went wrong",'fail');
        }

    }
    public function storageLink()
    {
        try {
            if (File::exists('storage')) {
                File::delete('storage');
            }
            Artisan::call('storage:link');
            return $this->getResponse("Storage link is created",'success');
        }catch (\Exception $e){
            return $this->getResponse("Something went wrong",'fail');
        }
    }

    public function removeController($name)
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

    private function getResponse($message,$status=null){
        $type = config("devtool.response_type");
        if ($type == 'json') return response()->json(['status'=>$status,'message'=>$message],200);
        else return $message;
    }

}
