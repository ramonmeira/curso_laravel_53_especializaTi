<?php

Route::resource('/painel/product', 'Painel\ProductController');

Route::group(['namespace' => 'Site'], function() {
	Route::get('/categoria/{idCat}', 'SiteController@categoria');
	Route::get('/categoriaOp/{idCat?}', 'SiteController@categoriaOp');

	Route::get('/contato', 'SiteController@contato');
	Route::get('/', 'SiteController@index');
});

Route::group(['namespace' => 'Painel', 'middleware' => 'auth'], function() {
	Route::get('/painel', 'PainelController@index')->middleware('auth');
});
