<?php

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
