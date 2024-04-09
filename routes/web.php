<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;

Route::get('/', function () {
    return abort(Response::HTTP_FORBIDDEN);
});
