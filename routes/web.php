<?php

Route::group(['prefix' => 'painel','middleware' => 'auth'], function() {
    Route::get('/users', function() {
        return 'users';
    });
    Route::get('/financeiro', function() {
        return 'Financeiro';
    });
    Route::get('/', function() {
        return 'Dashboard';
    });
});
Route::get('login', function() {
    return '#Form login';
});

Route::get('/categoria2/{idCat?}', function($idCat=1) {
    return "Posts da categoria {$idCat}";
});

Route::get('/categoria/{idCat}/item/{idItem}', function($idCat,$idItem) {
    return "Posts da categoria {$idCat} - {$idItem}";
});

Route::get('/nome/nome2/nome3', function() {
    return 'Big route';
})->name('big.route');

Route::get('/big', function() {
    return redirect()->route('big.route');
});

Route::any('/any', function() {
    return 'Route any';
});

Route::match(['get', 'post'], '/match', function() {
    return 'Route match';
});

Route::post('/post', function() {
    return 'Route post';
});

Route::get('/contato', function() {
    return 'contato';
});

Route::get('/empresa', function(){
	return view('empresa');
});

Route::get('/', function () {
    return view('welcome');
});
