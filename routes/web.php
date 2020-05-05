<?php


Route::group(['namespace' => 'Site'], function() {
	Route::get('/categoria/{idCat}', 'SiteController@categoria');
	Route::get('/categoriaOp/{idCat?}', 'SiteController@categoriaOp');

	Route::get('/contato', 'SiteController@contato');
	Route::get('/', 'SiteController@index');
});
