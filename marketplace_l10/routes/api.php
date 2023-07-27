<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SupportControllerApi;

Route::apiResource('/supports', SupportControllerApi::class);
