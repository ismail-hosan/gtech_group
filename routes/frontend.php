<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Frontant')->group(function () {

    Route::get('/cache', function () {
        \Artisan::call('optimize:clear');

        return '/';
    });
    // Home route 
    Route::get('/', 'FrontendController@index')->name('frontend.index');

    // our client
    Route::get('/ourclient', 'FrontendController@ourclient')->name('menu.aboutus.ourclient');
    Route::get('/ourConcern', 'FrontendController@ourConcern')->name('menu.ourConcern');
    Route::get('/ourConcern/{slug}','PagesController@concernshow')->name('ourConcern.show');
    Route::get('/about-us/directorMesssge', 'FrontendController@directorMesssge')->name('menu.aboutus.directorMesssge');
    // About Us
    Route::get('/about-us', 'FrontendController@aboutus')->name('menu.aboutus');

    // Our team
    Route::get('/about-us/ourteam', 'FrontendController@ourteam')->name('menu.aboutus.ourteam');

    Route::get('/gallery/photos', 'FrontendController@photos')->name('view.photos');
    Route::get('/gallery/videos', 'FrontendController@videos')->name('view.videos');

    // testimunials
    Route::get('/about-us/testimunials', 'FrontendController@testimunials')->name('menu.aboutus.testimunials');
    // overview
    Route::get('/about-us/overview', 'FrontendController@overview')->name('menu.aboutus.overview');
    Route::get('/about-us/partnership', 'FrontendController@partnership')->name('menu.aboutus.partnership');
    Route::get('/about-us/technologies', 'FrontendController@technologies')->name('menu.aboutus.technologies');

    // contact us
    Route::get('/contact-us', 'FrontendController@contact')->name('contact.us');
    Route::post('/contactemailsend', 'FrontendController@contactemailsend')->name('contactemailsend');


    // privacy link
    Route::get('/privacy-policy', 'FrontendController@privacy')->name('menu.privacy');

    //page routes
    // Route::get('/pages/{firstparam}', 'PagesController@firstLavelPage')->name('page.firstlavel');
    // Route::get('/pages/{firstparam}/{secondparam}', 'PagesController@secondLavelPage')->name('page.secondlavel');
    // Route::get('/pages/{firstparam}/{secondparam}/{thirdparam}', 'PagesController@thirdLavelPage')->name('page.thirdlavel');
    // Route::get('/services/{category:slug}', 'PagesController@service_categories')->name('pages.category.services');
    // Route::get('/services/{category}/{subcategory}', 'PagesController@services')->name('pages.subcategory.services');

    Route::get('/services/{slug:slug}',  'PagesController@pages')->name('pages.services');
    Route::get('/softwares/{slug:slug}',  'PagesController@softwares')->name('pages.product');
    Route::post('orderNow',  'PagesController@orderNow')->name('orderNow');
    Route::get('/careers',  'PagesController@careers')->name('careers');
    Route::get('/careers/{slug}',  'PagesController@show')->name('careers.show');
    Route::get('/blogs',  'PagesController@blogs')->name('menu.blog');
    Route::get('/blogs/{slug}',  'PagesController@blogsshow')->name('blogs.show');

    Route::get('/project/{id}/ditails','PagesController@project')->name('project.ditails');
    // Route::get('/');

    Route::get('/top-10-software-company-in-bangladesh',  'PagesController@blogTop10Company')->name('top_ten_products');
});
