<?php

use Harimayco\Menu\Controllers\MenuController;

Route::group(['middleware' => config('menu.middleware')], function () {
    //Route::get('wmenuindex', array('uses'=>'\Harimayco\Menu\Controllers\MenuController@wmenuindex'));
    $path = rtrim(config('menu.route_path'));
    Route::post($path . '/addcustommenu', [MenuController::class, 'addcustommenu'])->name('haddcustommenu');
    Route::post($path . '/deleteitemmenu', [MenuController::class, 'deleteitemmenu'])->name('hdeleteitemmenu');
    Route::post($path . '/deletemenug', [MenuController::class, 'deletemenug'])->name('hdeletemenug');
    Route::post($path . '/createnewmenu', [MenuController::class, 'createnewmenu'])->name('hcreatenewmenu');
    Route::post($path . '/generatemenucontrol', [MenuController::class, 'generatemenucontrol'])->name('hgeneratemenucontrol');
    Route::post($path . '/updateitem', [MenuController::class, 'updateitem'])->name('hupdateitem');
});