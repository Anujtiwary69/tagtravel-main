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

// Route::get('/', 'HomeController@index');
// Route::get('/leva-mazaya-centre/stay', 'HotelController@stay');
// Route::get('/leva-mazaya-centre/dine', 'HotelController@dine');
// Route::get('/leva-mazaya-centre/relax', 'HotelController@relax');
// Route::get('/leva-mazaya-centre/meet', 'HotelController@meet');

// Route::get('/leva-mazaya-centre/celebrate', 'HotelController@celebrate');
// Route::get('/leva-mazaya-centre/offers', 'HotelController@offer');
// Route::get('/leva-mazaya-centre/gallery', 'HotelController@gallery');
// Route::get('/leva-mazaya-centre/room-detail/{id}','HotelController@roomDetailPage');

// Route::get('/leva-mazaya-centre/contact-us', 'HotelController@contactUS');
// Route::get('/contact-us', 'HomeController@contactUS');
// Route::get('/offers', 'HomeController@offer');

// Route::get('/press', 'HomeController@press');
// Route::get('/our-brands','HomeController@OurBrandPage');
// Route::get('/our-partner','HomeController@OurBrand');
// Route::get('/leva-ethos','HomeController@OurBrand');
// Route::get('/levas-competitive-edge','HomeController@OurBrand');
// Route::get('/levas-winning-culture','HomeController@OurBrand');
// Route::get('/levas-winning-culture','HomeController@OurBrand');
// Route::get('/levas-value-proposition','HomeController@OurBrand');

// Route::get('/a-brand-for-every-one','HomeController@OurBrand');
// Route::get('/about-leva-hotels','HomeController@OurBrand');
// Route::get('/levas-founder','HomeController@OurBrand');

// Route::get('/leva-mazaya-centre','HotelController@index');
// Route::get('/leva-hotel-mazaya-centre','HotelController@index');
// Route::get('/leva-mazaya-centre/offer-detail/{id}','HotelController@offersDetailsPage');
// Route::get('/leva-careers','HomeController@OurBrand');

// Route::get('/news/detail/{title}','HomeController@GetNewsDetail');
// Route::get('/privacy-policy','HomeController@privacyPolicy');
// Route::get('/hotel-development','HomeController@OurBrand');
// Route::get('/print','HomeController@printPage');
// Route::get('/corporate-support','HomeController@Corporate');
// Route::get('/development','HomeController@BusinessDevelopment');
// Route::get('/3rd-party-management','HomeController@privacyPolicy');

/**
 * OUR HOTELS PAGE 
 */

// Route::get('/safeer-continental-by-leva','HomeController@ourHotels');
// Route::get('/safeer-plaza-ekono-by-leva','HomeController@ourHotels');
// Route::get('/emin-pasha-hotel-&-residences-by-leva','HomeController@ourHotels');

// Route::get()

// Route::get('/instagram-api','HomeController@InstagramAPi');

/**
 * Instagram ROUTES starts here
 */

// Route::get('/callback','InstagramController@callBack');

// Route::get('/init-instagram-api','InstagramController@initInstagramAPI');

// Route::get('/instagram-run','InstagramController@runWithOutAuth');

/*
Forecast info starts here


*/
// Route::get('get/forecast/','ForecastController@getCurrentForecast');
/**
 * Arabic section and Language Selection
 */
// Route::get('/arabic','HomeController@changeLanguage');
// Route::get('locale/{locale}', function ($locale) {
//     \Session::put('locale', $locale);
//     return redirect()->back();
// });
/**
 * AJAX Request Starts here
 */
// Route::get('/get/location','GoogleApiController@getAutoCompleteAddress');
// Route::get('/get/direction','GoogleApiController@getMapDirectionApi');


/**
 *
 * Admin Dashboard Starts here
 */
// Auth::routes();

// Route::get('/dashboard', 'AdminController@index');
// Route::get('/admin/category', 'AdminController@addCategory');
// Route::get('/manage/category','AdminController@ManageCategory');
// Route::get('/admin/upload-image', 'AdminController@uploadImage');
// Route::get('/admin/edit', 'AdminController@Edit');
// Route::post('/add/category','AdminController@addCategoryDB');
// Route::get('/delete/category/{id}','AdminController@deleteCategory');
// Route::post('/update/category','AdminController@UpdateCategory');
// Route::get('/add/news','AdminController@addNews');
// Route::post('/add/news/db','AdminController@addNewsDatabase');
// Route::get('/get/news','AdminController@getnewsDatabase');

// Route::group(['namespace'=>'Admin','prefix' => 'admin','as'=>'admin.'], function () {
//     Route::resource('guest-review', 'GuestReviewController');
// });



