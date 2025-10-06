<?php

use Illuminate\Support\Facades\Route;
use Betagen\Linerider\Facades\Linerider;

Route::get('/linerider/ping', function () {
    return response()->json([
        'ok' => true,
        'message' => Linerider::ping(),
    ]);
});
