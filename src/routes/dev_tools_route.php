<?php

use Illuminate\Support\Facades\Route;
use Karim007\DevTools\Controllers\DevToolController;

Route::get("/dev/clear", [DevToolController::class, "clear"]);
Route::get("/dev/migration", [DevToolController::class, "migration"]);
Route::get("/dev/passport/install", [DevToolController::class, "passportInstall"]);
Route::get("/dev/maintain/mode", [DevToolController::class, "maintainMode"]);
Route::get("/dev/live/mode", [DevToolController::class, "liveMode"]);
Route::get("/dev/storage/link", [DevToolController::class, "storageLink"]);
