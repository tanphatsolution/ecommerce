<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middlewareGroups' => ['web']], function () {

	Route::get('image/{path}', ['as' => 'image', 'uses' => 'Backend\DashboardController@getReponseImage'])->where('path', '(.*?)');
	
	Route::group(['namespace' => 'Auth'], function () {
		Route::group(['namespace' => 'Backend'], function () {
			Route::get('login', 'AuthController@getLogin');
            Route::post('login', ['as' => 'login', 'uses' => 'AuthController@postLogin']);
            Route::get('logout', 'AuthController@logout');
		});

	});
	Route::group(['prefix' => '/data', 'namespace' => 'Frontend'], function () {
		Route::get('product/{id}', ['as' => 'data.product.show', 'uses' => 'ProductController@dataShow']);
	});

	Route::group(['prefix' => '/', 'namespace' => 'Frontend'], function () {
		Route::get('/', ['as' => 'home.index', 'uses' => 'HomeController@index']);
        Route::get('category/{slug}', ['as' => 'category.slug', 'uses' => 'CategoryController@category']);
        Route::get('page/{slug}', ['as' => 'page.slug', 'uses' => 'PageController@slug']);
        Route::get('product/{slug}', ['as' => 'product.slug', 'uses' => 'ProductController@show']);
	});

	Route::group(['prefix' => '/backend', 'namespace' => 'Backend', 'middleware' => ['auth']], function () {
		Route::get('/', 'DashboardController@index');
		Route::post('summernote/image', ['as' => 'backend.summernote.image', 'uses' => 'DashboardController@summernoteImage']);
		Route::PATCH('notification/{notification}', array('as' => 'backend.notification.read', 'uses' => 'DashboardController@readNotification'));

		Route::get('user/data/role/{role}', ['as' => 'backend.user.data.role', 'uses' => 'UserController@getDataWithRole']);
		Route::get('user/role/{role}', ['as' => 'backend.user.role', 'uses' => 'UserController@role']);
		Route::get('user/data', ['as' => 'backend.user.data', 'uses' => 'UserController@getData']);
		Route::resource('user', 'UserController');

		Route::get('role/data', ['as' => 'backend.role.data', 'uses' => 'RoleController@getData']);
		Route::resource('role', 'RoleController');

		Route::get('profile/log', ['as' => 'backend.profile.log', 'uses' => 'ProfileController@getLog']);
		Route::get('profile', ['as' => 'backend.profile', 'uses' => 'ProfileController@userShow']);
		Route::PATCH('profile/update', ['as' => 'backend.profile.update', 'uses' => 'ProfileController@userUpdate']);

		Route::get('category/type/{type}', ['as' => 'backend.category.type', 'uses' => 'CategoryController@withType']);
		Route::resource('category', 'CategoryController');

		Route::get('post/data/category/{category}', ['as' => 'backend.post.data.category', 'uses' => 'PostController@getDataWithCategory']);
		Route::get('post/category/{category}', ['as' => 'backend.post.category', 'uses' => 'PostController@category']);
		Route::get('post/data', ['as' => 'backend.post.data', 'uses' => 'PostController@getData']);
		Route::get('post/tags', ['as' => 'backend.post.tags', 'uses' => 'PostController@getTags']);
		Route::resource('post', 'PostController');

		Route::get('page/data', ['as' => 'backend.page.data', 'uses' => 'PageController@getData']);
		Route::get('page/tags', ['as' => 'backend.page.tags', 'uses' => 'PageController@getTags']);
		Route::resource('page', 'PageController');

		Route::get('provider/data', ['as' => 'backend.provider.data', 'uses' => 'ProviderController@getData']);
		Route::resource('provider', 'ProviderController');

		Route::get('product/data/category/{category}', ['as' => 'backend.product.data.category', 'uses' => 'ProductController@getDataWithCategory']);
		Route::get('product/category/{category}', ['as' => 'backend.product.category', 'uses' => 'ProductController@category']);
		Route::get('product/data', ['as' => 'backend.product.data', 'uses' => 'ProductController@getData']);
		Route::get('product/tags', ['as' => 'backend.product.tags', 'uses' => 'ProductController@getTags']);
		Route::resource('product', 'ProductController');

		Route::resource('property', 'PropertyController', ['only' => [
                'index', 'edit', 'store', 'update', 'destroy'
            ]
        ]);

        Route::resource('config', 'ConfigController', ['only' => ['index', 'store']]);

        Route::get('slide/data', ['as' => 'backend.slide.data', 'uses' => 'SlideController@getData']);
		Route::resource('slide', 'SlideController');

        Route::resource('image', 'ImageController', ['only' => [
                'index', 'store', 'update', 'destroy'
            ]
        ]);

        Route::get('order/data', ['as' => 'backend.order.data', 'uses' => 'OrderController@getData']);
        Route::resource('order', 'OrderController', ['only' => [
                'index', 'edit', 'update', 'destroy'
            ]
        ]);

        Route::POST('menu/serialize', ['as' => 'backend.menu.serialize','uses' => 'MenuController@serialize']);
        Route::resource('menu', 'MenuController', ['only' => [
                'index', 'store', 'update', 'destroy'
            ]
        ]);
	});
});

