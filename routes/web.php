<?php

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');

Route::get('/produtos', 'ProdutoController@lista');

Route::get('/produtos/novo', 'ProdutoController@novo');

Route::match(array('GET', 'POST'), 
    '/produtos/adiciona', 
    'ProdutoController@adiciona');

Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

Auth::routes();

Route::get('/', 'HomeController@index');
