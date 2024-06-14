<?php

//Middleware => guest
Route::group(['Middleware' => ['guest']], function () {
    Route::get("/", "PageController@login")->name('login');
    Route::post('/login', "AuthController@ceklogin");
});

//Middleware => auth
Route::group(['Middleware' => ["auth"]], function () {
    Route::get('user', "PageController@edituser");
    Route::post("/updateuser", "PageController@updateuser");
    Route::get('/logout', "AuthController@ceklogout");

    //Home
    Route::get('/home', "PageController@home");

    //Menambahkan Data
    Route::get('/jogjatrip', "PageController@jogjatrip");
    Route::get('/jogjatrip/add-form', "PageController@formaddjogjatrip");
    Route::post('/save', "PageController@savejogjatrip");

    //Mengedit Data
    Route::get('/form-edit/{id}', "PageController@formeditjogjatrip");
    Route::put('update/{id}', "PageController@updatedestinasi");

    //Menghapus Data
    Route::get('/delete/{id}', "PageController@deletedestinasi");
});

