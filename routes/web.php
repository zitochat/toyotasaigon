<?php

Auth::routes();

/**
 * aut
 */
Route::group(['middleware' => ['guest']], function () use ($router) {
    $router->get('login_user', 'HomeController@showLogin');
    $router->post('login_user', 'HomeController@doLogin');
    $router->post('login', 'HomeController@doLogin');
});

/**
 * admin
 */
//['middleware' => ['auth']], 
Route::group(['middleware' => ['auth']], function () use ($router) {
    $router->get('logout', 'HomeController@doLogout');
    $router->get('/cpanel_admin', 'Admin\AdminController@getAdminIndex');
/**
 * pages
 */
    $router->group([
        'prefix'    => 'cpanel_admin',
        'namespace' => 'Admin',
    ], function () use ($router) {
        //contact
        $router->get('contact', 'AdminController@getContactIndex');
        $router->get('contact/del/{id}', 'AdminController@getContactDel')->where(['id'=> '[0-9]+']);
        //posts
        $router->get('posts', 'AdminController@getPostsIndex');
        $router->get('posts/del/{id}', 'AdminController@getPostsDel')->where(['id'=> '[0-9]+']);
        $router->get('posts/edit/{id}', 'AdminController@getPostsEdit')->where(['id'=> '[0-9]+']);
        $router->get('posts/add', 'AdminController@addPosts');
        $router->post('posts/post', 'AdminController@savePosts');
        //categories
        $router->get('categories', 'AdminController@getCategoriesIndex');
        //branch
        $router->get('branch', 'AdminController@getBranchIndex');
        //users
        $router->get('users', 'AdminController@getUsersIndex');
        $router->get('users/del/{id}', 'AdminController@getUsersDel')->where(['id'=> '[0-9]+']);
        //vehicles
        $router->get('vehicles', 'AdminController@getVehiclesIndex');
        $router->get('vehicles/del/{id}', 'AdminController@getVehiclesDel')->where(['id'=> '[0-9]+']);
        $router->get('vehicles/edit/{id}', 'AdminController@getVehiclesEdit')->where(['id'=> '[0-9]+']);
        $router->post('vehicles/post/{id}', 'AdminController@getVehiclesPost')->where(['id'=> '[0-9]+']);

        //sliders
        $router->get('sliders', 'AdminController@getSlidersIndex');
        $router->get('sliders/del/{id}', 'AdminController@getSlidersDel')->where(['id'=> '[0-9]+']);
        $router->get('sliders/edit/{id}', 'AdminController@getSlidersEdit')->where(['id'=> '[0-9]+']);
        $router->get('sliders/add', 'AdminController@addSliders');
        $router->post('sliders/post', 'AdminController@saveSliders');
        //driving
        $router->get('driving', 'AdminController@getDrivingIndex');
        $router->get('driving/del/{id}', 'AdminController@getDrivingDel')->where(['id'=> '[0-9]+']);
        //schedule
        $router->get('schedule', 'AdminController@getScheduleIndex');
        $router->get('schedule/del/{id}', 'AdminController@getScheduleDel')->where(['id'=> '[0-9]+']);
        //products
        $router->get('products', 'AdminController@getProductsIndex');
        $router->get('products/del/{id}', 'AdminController@getProductsDel')->where(['id'=> '[0-9]+']);
        $router->get('products/edit/{id}', 'AdminController@getProductsEdit')->where(['id'=> '[0-9]+']);
        $router->get('products/add', 'AdminController@addProducts');
        $router->post('products/post', 'AdminController@saveProducts');
        //province
        $router->get('province', 'AdminController@getProvinceIndex');
        //district
        $router->get('district', 'AdminController@getDistrictIndex');
        //ward
        $router->get('ward', 'AdminController@getWardIndex');
        //product item
        $router->get('/products/{item}/{slug}', 'AdminController@getProductItem')
        ->where([
            'item'=> '(outbuilding|furniture|safe|operate|accessories)',
            'slug'  => '[A-z-0-9-]+',
            ])
        ->name('product_items');
        

        //product item del
        $router->get('/products/{item}/{slug}/del/{id}', 'AdminController@getProductItemDel')
        ->where([
            'item'=> '(outbuilding|furniture|safe|operate|accessories)',
            'slug'=> '[A-z-0-9-]+',
            'id'=> '[0-9]+'
            ])
        ->name('product_items_del');

        //product item edit
        $router->get('/products/{item}/{slug}/edit/{id}', 'AdminController@getProductItemEdit')
        ->where([
            'item'=> '(outbuilding|furniture|safe|operate|accessories)',
            'slug'=> '[A-z-0-9-]+',
            'id'=> '[0-9]+'
            ])
        ->name('product_items_edit');

        //product item add
        $router->get('/products/{item}/{slug}/add', 'AdminController@getProductItemAdd')
        ->where([
            'item'=> '(outbuilding|furniture|safe|operate|accessories)',
            'slug'=> '[A-z-0-9-]+'
            ])
        ->name('product_items_add');

        //product item post
        $router->post('/products/{item}/{slug}/post', 'AdminController@getProductItemPost')
        ->where([
            'item'=> '(outbuilding|furniture|safe|operate|accessories)',
            'slug'=> '[A-z-0-9-]+'
            ])
        ->name('product_items_post');

        //product color
        $router->get('/products/color/{slug}', 'AdminController@getProductItemColor')
        ->where([
            'slug'  => '[A-z-0-9-]+',
            ])
        ->name('product_items_color');

        //product item color del
        $router->get('/products/color/{slug}/del/{id}', 'AdminController@getProductItemColorDel')
        ->where([
            'slug'=> '[A-z-0-9-]+',
            'id'=> '[0-9]+'
            ])
        ->name('product_items_color_del');

        //product item color edit
        $router->get('/products/color/{slug}/edit/{id}', 'AdminController@getProductItemColorEdit')
        ->where([
            'slug'=> '[A-z-0-9-]+',
            'id'=> '[0-9]+'
            ])
        ->name('product_items_color_edit');

        //product item color add
        $router->get('/products/color/{slug}/add', 'AdminController@getProductItemColorAdd')
        ->where([
            'slug'=> '[A-z-0-9-]+',
            ])
        ->name('product_items_color_add');


        //product item color post
        $router->post('/products/color/{slug}/post', 'AdminController@getProductItemColorPost')
        ->where([
            'slug'=> '[A-z-0-9-]+'
            ])
        ->name('product_items_color_post');

        //product specifications
        $router->get('/products/specifications/{slug}', 'AdminController@getProductItemSpecifications')
        ->where([
            'slug'  => '[A-z-0-9-]+',
            ])
        ->name('product_items_specifications');

        //product item specifications del
        $router->get('/products/specifications/{slug}/del/{id}', 'AdminController@getProductItemSpecificationsDel')
        ->where([
            'slug'=> '[A-z-0-9-]+',
            'id'=> '[0-9]+'
            ])
        ->name('product_items_specifications_del');

        //product item specifications edit
        $router->get('/products/specifications/{slug}/edit/{id}', 'AdminController@getProductItemSpecificationsEdit')
        ->where([
            'slug'=> '[A-z-0-9-]+',
            'id'=> '[0-9]+'
            ])
        ->name('product_items_specifications_edit');

        //product item specifications add
        $router->get('/products/specifications/{slug}/add', 'AdminController@getProductItemSpecificationsAdd')
        ->where([
            'slug'=> '[A-z-0-9-]+',
            ])
        ->name('product_items_specifications_add');


        //product item specifications post
        $router->post('/products/specifications/{slug}/post', 'AdminController@getProductItemSpecificationsPost')
        ->where([
            'slug'=> '[A-z-0-9-]+'
            ])
        ->name('product_items_specifications_post');

        /**
         * Product price
         */

        //product price
        $router->get('/products/price/{slug}', 'AdminController@getProductItemPrice')
        ->where([
            'slug'  => '[A-z-0-9-]+',
            ])
        ->name('product_items_price');

        //product item price post
        $router->post('/products/price/{slug}/post', 'AdminController@getProductItemPricePost')
        ->where([
            'slug'=> '[A-z-0-9-]+'
            ])
        ->name('product_items_price_post');
    });
});
/**
 * frontend
 */
Route::get('/', 'HomeController@getIndex')->name('home');
Route::get('/home', 'HomeController@getIndex')->name('home_main');
Route::get('/index.html', 'HomeController@getIndex')->name('home_index');
Route::get('/chinh-sach.html', 'PagesController@getRuleIndex');
Route::get('/lien-he.html', 'PagesController@getContactIndex');
Route::get('/lien-he-thanh-cong.html', 'PagesController@getContactSuccessIndex');
Route::post('/lien-he.html', 'PagesController@postContact');
Route::get('/tuyen-dung.html', 'PagesController@getHireIndex');

Route::get('/tin-tuc.html', 'PagesController@getNewsIndex')->name('news');
Route::get('/dich-vu.html', 'PagesController@getServicesIndex')->name('services');

Route::get('/tin-tuc/hoat-dong-tesc', 'PagesController@getTescIndex');
Route::get('/tin-tuc/thi-truong-oto', 'PagesController@getOtoIndex');

Route::get('/{category}/{slug}-{id}.html', 'PagesController@getCatDetailsIndex')
->where([
    'category' => '(tin-tuc|dich-vu|gioi-thieu|tra-gop)',
    'slug'  => '[A-z-0-9-]+',
    'id'    => '[0-9]+' 
    ])
->name('categories_details');

Route::get('/gioi-thieu.html', 'PagesController@getAboutIndex')->name('about');

Route::get('/dat-lich-bao-duong.html', 'PagesController@getScheduleMaintenanceIndex');
Route::post('/dat-lich-bao-duong.html', 'PagesController@postScheduleMaintenanceIndex');
Route::post('/dat-lich-bao-duong-save.html', 'PagesController@saveScheduleMaintenanceIndex');

Route::post('/admin/ajax/process_tinhquan.php', 'PagesController@postProvince');


Route::get('/lai-thu.html', 'PagesController@getDrivingIndex');
Route::post('/lai-thu.html', 'PagesController@postDrivingIndex');
Route::post('/lai-thu-save.html', 'PagesController@saveDrivingIndex');

Route::get('/san-pham/{slug}-{id}.html', 'PagesController@getProductDetailsIndex')
->where([
    'slug'  => '[A-z-0-9-]+',
    'id'    => '[0-9]+' 
    ])
->name('product_details');

Route::get('/san-pham.html', 'PagesController@getProductsIndex');

Route::get('/du-toan-chi-phi', 'PagesController@getPriceIndex');

Route::post('/ajax/product_slider.php', 'PagesController@postProductSlider');

Route::get('/ve-chung-toi', 'PagesController@getAboutDetailIndex');

Route::get('/facebook.php', 'PagesController@facebookIndex');

Route::get('/email.php', 'PagesController@EmailIndex');

//ajax_vehicles.php
Route::get('/ajax_vehicles.php', 'PagesController@AjaxVehiclesIndex');

//ajax_price.php
Route::get('/ajax_price.php', 'PagesController@AjaxPriceIndex');

//dich-vu-tai-chinh
Route::get('/dich-vu-tai-chinh', 'PagesController@getServiceIndex');
//cong-ty-tai-chinh-toyota-viet-nam
Route::get('/cong-ty-tai-chinh-toyota-viet-nam', 'PagesController@getAboutToyotaIndex');
//su-menh-tam-nhin-va-triet-ly
Route::get('/su-menh-tam-nhin-va-triet-ly', 'PagesController@getMissionIndex');
//co-hoi-nghe-nghiep
Route::get('/co-hoi-nghe-nghiep', 'PagesController@getJobIndex');
//dieu-kien-dang-ky
Route::get('/dieu-kien-dang-ky', 'PagesController@getRegisterRuleIndex');
//hoi-dap
Route::get('/hoi-dap', 'PagesController@getQuestionIndex');
//san-pham-dich-vu
Route::get('/san-pham-dich-vu', 'PagesController@getProductServiceIndex');
//cach-tinh
Route::get('/cach-tinh', 'PagesController@getCalcIndex');