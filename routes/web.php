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
    Route::get('permissions', ['as' => 'painel.permissions', 'uses' => 'Painel\PermissionController@index']);
    Route::get('permissions/delete/{id}', ['as' => 'painel.permissions.delete', 'uses' => 'Painel\PermissionController@delete']);
    Route::get('permissions/edit/{id}', ['as' => 'painel.permissions.edit', 'uses' => 'Painel\PermissionController@edit']);
    //RoleController
    Route::get('roles', ['as' => 'painel.roles', 'uses' => 'Painel\RoleController@index']);
    Route::get('roles/permission/{id}', ['as' => 'painel.roles.permissions', 'uses' => 'Painel\RoleController@permission']);
    Route::get('roles/edit/{id}', ['as' => 'painel.roles.edit', 'uses' => 'Painel\RoleController@edit']);
    Route::get('roles/delete/{id}', ['as' => 'painel.roles.delete', 'uses' => 'Painel\RoleController@delete']);
    //UsersController
    Route::get('users', ['as' => 'painel.users', 'uses' => 'Painel\UserController@index']);
    Route::get('users/edit/{id}', ['as' => 'painel.users.edit', 'uses' => 'Painel\UserController@edit']);
    Route::get('users/delete/{id}', ['as' => 'painel.users.delete', 'uses' => 'Painel\UserController@delete']);
    //PainelController
    Route::get('/', ['as' => 'painel.index', 'uses' => 'Painel\PainelController@index']);
});


Auth::routes();
Route::get('/', ['as' => 'portal.index', 'uses' => 'Portal\SiteController@index']);
