<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('yeniuyelers', yeniuyeler::class);

    $router->resource('usuer_names', user_name_controll::class);

    $router->resource('gezis', GeziKontrol::class);

    $router->resource('rehberlers', RehberlerKontrol::class);

    $router->resource('illers', illerKontrol::class);

    $router->resource('cities', cityKontrol::class);

    $router->resource('shops', shopKontrol::class);

    $router->resource('detays', detayKontrol::class);

    $router->resource('mainusers', mainuserKontrol::class);

    $router->resource('myprofils', myprofilKontrol::class);

    $router->resource('carts', cartKontrol::class);

});
