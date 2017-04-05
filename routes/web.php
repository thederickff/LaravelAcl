<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::group(['prefix' => 'painel'], function() {

    //PostController
    Route::get('posts', ['as' => 'painel.posts', 'uses' => 'Painel\PostController@index']);
    Route::get('posts/edit/{id}', ['as' => 'painel.posts.edit', 'uses' => 'Painel\PostController@edit']);
    Route::get('posts/delete/{id}', ['as' => 'painel.posts.delete', 'uses' => 'Painel\PostController@delete']);
    //PermissionController
    
    //RoleController
   
    //PainelController
    Route::get('/', ['as' => 'painel.index', 'uses' => 'Painel\PainelController@index']);
});


Auth::routes();
Route::get('/', ['as' => 'portal.index', 'uses' => 'Portal\SiteController@index']);
