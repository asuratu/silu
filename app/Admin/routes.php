<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->resource('alumnus', AlumnusController::class);
    $router->get('alumnus', 'AlumnusController@index')->name('admin.alumnus');

    $router->resource('teachers_cates', TeachersCatesController::class);
    $router->resource('teachers', TeachersController::class);

    $router->resource('banners', BannersController::class);
    $router->resource('nav_banners', NavBannersController::class);


    $router->resource('courses_cates', CoursesCatesController::class);
    $router->resource('courses', CoursesController::class);

    $router->resource('founders', FoundersController::class);

    $router->resource('schools', SchoolsController::class);

    $router->resource('boards', BoardsController::class);

    $router->resource('advantages', AdvantagesController::class);

    $router->resource('settings', SettingsController::class);

    $router->resource('signs', SignsController::class);

    $router->resource('seos', SeosController::class);

    $router->resource('pages', 'PagesController');


});
