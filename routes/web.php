<?php

use Illuminate\Support\Facades\Route;

// Rotas do Site
Route::get('/',                         'Site\HomeController@index')->name('home');
Route::get('/curso',                    'Site\CourseController@index')->name('curso');
Route::get('/evento',                   'Site\EventController@index')->name('evento');
Route::get('/artigo',                   'Site\ArticleController@index')->name('artigo');
Route::get('/galeria',                  'Site\GalleryController@index')->name('galeria');
Route::get('/revista',                  'Site\MagazineController@index')->name('revista');
Route::get('/Contato',                  'Site\ContactController@index')->name('contato');

Route::get('/imagens/{id}',             'Site\ImageController@index')->name('imagens');
Route::get('/detalhe-artigo/{id}',      'Site\ArticleController@detail')->name('detalhe-artigo');
