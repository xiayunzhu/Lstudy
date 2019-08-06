<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



//use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Api',
    'prefix' => 'open'

], function (Router $router) {

    # 登录页面
    $router->get('add', 'UserController@add');

});
