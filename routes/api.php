<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;

Route::middleware(['auth:sanctum', 'role:owner,headmaster'])->group(function () {
    Route::apiResource('students', StudentController::class);
    Route::apiResource('guardians', GuardianController::class);
});
