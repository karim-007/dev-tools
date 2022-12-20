<?php

use Illuminate\Support\Facades\Route;
use Karim007\DevTools\Controllers\DevToolController;

Route::get("/dev/clear/{access_code}", [DevToolController::class, "clear"]);
Route::get("/dev/migration/{access_code}", [DevToolController::class, "migration"]);
Route::get("/dev/passport/install/{access_code}", [DevToolController::class, "passportInstall"]);
Route::get("/dev/maintain/mode/{access_code}", [DevToolController::class, "maintainMode"]);
Route::get("/dev/live/mode/{access_code}", [DevToolController::class, "liveMode"]);
Route::get("/dev/storage/link/{access_code}", [DevToolController::class, "storageLink"]);

/*
** Advance dev tool routes
*/

Route::get("/dev/remove/controller/{access_code}/{name}", [\Karim007\DevTools\Controllers\AdvanceDevToolController::class, "removeController"]);
Route::get("/dev/remove/model/{access_code}/{name}", [\Karim007\DevTools\Controllers\AdvanceDevToolController::class, "removeModel"]);
