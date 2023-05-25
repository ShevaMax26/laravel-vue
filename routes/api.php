<?php

use App\Http\Controllers\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'people'], function () {
    Route::get('/', Person\IndexController::class)->name('person.index');
    Route::post('/', Person\StoreController::class)->name('person.store');
    Route::get('/{person}', Person\ShowController::class)->name('person.show');
    Route::patch('/{person}', Person\UpdateController::class)->name('person.update');
    Route::delete('/{person}', Person\DestroyController::class)->name('person.destroy');
});
