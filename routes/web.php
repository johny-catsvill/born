<?php

use App\Models\Page;
use Illuminate\Support\Facades\Route;

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

Route::get('/test-url', function () {
    foreach (Page::all() as $page) {
        $page->top_text = \Str::replace('/storage/images/pages/gallery/', '/storage/pages/', $page->top_text);
        $page->middle_text = \Str::replace('/storage/images/pages/gallery/', '/storage/pages/', $page->middle_text);
        $page->bottom_text = \Str::replace('/storage/images/pages/gallery/', '/storage/pages/', $page->bottom_text);
        $page->save();

    }
});

Route::get('/sitemap.xml', 'PageController@sitemap')->name('sitemap');

Route::get('/', 'HomeController@home')->name('home');

Route::get('/blogs', [
    'as' => 'blogs',
    'uses' => 'BlogController@blogs'
]);

Route::get('/blogs/{slug}', [
    'as' => 'post',
    'uses' => 'BlogController@post'
])
    ->where('slug', '[\w\d\-\_]+');

Route::get('/prices', [
    'as' => 'prices',
    'uses' => 'PageController@prices'
]);

Route::match(['get', 'post'], '/contact-us', [
    'as' => 'contact-us',
    'uses' => 'PageController@contactUs'
]);


Route::get('/faq', [
    'as' => 'faq',
    'uses' => 'PageController@faq'
]);

Route::get('/about-us', [
    'as' => 'about-us',
    'uses' => 'PageController@aboutUs'
]);

Route::get('/get-a-quote', [
    'uses' => 'PageController@getQuote'
]);

Route::get('/privacy-policy', [
    'as' => 'privacy-policy',
    'uses' => 'PageController@privacyPolicy'
]);

Route::get('/scholarship', [
    'as' => 'scholarship',
    'uses' => 'PageController@scholarship'
]);

Route::get('/Boston-New-York-Moving-Prices', function () {
    return view('interstatemoving/bostontonewyork');
});
Route::get('/boston-new-york-moving-prices', function () {
    return Redirect::to('/Boston-New-York-Moving-Prices', 301);
});

Route::get('/boston-new-york-moving-prices/brooklyn', function () {
    return view('interstatemoving/nyc/brooklyn');
});
Route::get('/boston-new-york-moving-prices/manhattan', function () {
    return view('interstatemoving/nyc/manhattan');
});
Route::get('/boston-new-york-moving-prices/long-island', function () {
    return view('interstatemoving/nyc/long-island');
});

Route::get('/boston-to-philadelphia-moving/west-philadelphia', function () {
    return view('interstatemoving/philadelphia/westphil');
});
Route::get('/boston-to-philadelphia-moving/south-philadelphia', function () {
    return view('interstatemoving/philadelphia/southphil');
});
Route::get('/boston-to-philadelphia-moving/north-philadelphia', function () {
    return view('interstatemoving/philadelphia/northphil');
});

//Chicago
Route::get('/boston-chicago-moving/boston-evanston-moving', function () {
    return view('interstatemoving/chicago/evanston');
});
Route::get('/boston-chicago-moving/boston-oak-park-moving', function () {
    return view('interstatemoving/chicago/oak');
});

Route::get('/connecticut-moving', [
    'uses' => 'PageController@connecticutMoving'
]);


Route::get('/long-distance-moving-rhode-island', function () {
    return view('locations.rhodeisland.longdistance');
});
Route::get('/local-moving-rhode-island', function () {
    return view('locations.rhodeisland.local');
});
Route::get('/movers-packers-rhode-island', function () {
    return view('locations.rhodeisland.packing');
});
Route::get('/commercial-moving-rhode-island', function () {
    return view('locations.rhodeisland.commercial');
});

Route::get('/long-distance-moving-connecticut', function () {
    return view('locations.connecticut.longdistance');
});
Route::get('/local-moving-connecticut', function () {
    return view('locations.connecticut.local');
});
Route::get('/movers-packers-connecticut', function () {
    return view('locations.connecticut.packing');
});
Route::get('/commercial-moving-connecticut', function () {
    return view('locations.connecticut.commercial');
});

Route::get('/boston-to-philadelphia-moving/west-philadelphia', function () {
    return view('interstatemoving/philadelphia/westphil');
});
Route::get('/boston-to-philadelphia-moving/south-philadelphia', function () {
    return view('interstatemoving/philadelphia/southphil');
});
Route::get('/boston-to-philadelphia-moving/north-philadelphia', function () {
    return view('interstatemoving/philadelphia/northphil');
});

//Chicago
Route::get('/boston-chicago-moving/boston-evanston-moving', function () {
    return view('interstatemoving/chicago/evanston');
});
Route::get('/boston-chicago-moving/boston-oak-park-moving', function () {
    return view('interstatemoving/chicago/oak');
});


Route::get('/long-distance-moving-new-hampshire', function () {
    return view('locations.newhampshire.longdistance');
});
Route::get('/local-moving-new-hampshire', function () {
    return view('locations.newhampshire.local');
});
Route::get('/movers-packers-new-hampshire', function () {
    return view('locations.newhampshire.packing');
});
Route::get('/commercial-moving-new-hampshire', function () {
    return view('locations.newhampshire.commercial');
});


Route::get('/interstate', function () {
    return Redirect::to('/interstate-moving', 301);
});

Route::get('/interstate-moving', [
    'uses' => 'PageController@interstateMoving'
]);

// Cities
Route::get('/movers-washington-dc', function () {
    return view('interstatemoving/cities/dc');
});
Route::get('/movers-miami', function () {
    return view('interstatemoving/cities/miami');
});
Route::get('/movers-new-york-city', function () {
    return view('interstatemoving/cities/nyc');
});
Route::get('/movers-nashville', function () {
    return view('interstatemoving/cities/nashville');
});
Route::get('/movers-atlanta', function () {
    return view('interstatemoving/cities/atlanta');
});
Route::get('/movers-philadelphia', function () {
    return view('interstatemoving/cities/philly');
});


Route::get('/boston-charlotte-moving', function () {
    return view('interstatemoving/bostoncharlotte');
});


Route::get('/new-hampshire', function () {
    return Redirect::to('/new-hampshire-moving', 301);
});

Route::get('/new-hampshire-moving', [
    'uses' => 'PageController@newHampshireMoving'
]);

Route::get('/connecticut', function () {
    return Redirect::to('/connecticut-moving', 301);
});

Route::get('/rhode-island', function () {
    return Redirect::to('/rhode-island-moving', 301);
});

Route::get('/piano-moving', function () {
    return view('pianomoving');
});

Route::get('/local-moving', [
    'uses' => 'PageController@localMoving'
]);

Route::get('/packing-solution', function () {
    return view('packing');
});

Route::get('/moving-and-storage', function () {
    return view('movingandstorage');
});

Route::get('/special-services', function () {
    return view('special');
});

Route::get('/rhode-island-moving', [
    'uses' => 'PageController@rhodeIslandMoving'
]);

Route::get('/boston-movers', [
    'uses' => 'PageController@bostonMovers'
]);

Route::get('/waltham-moving', function () {
    return Redirect::to('/waltham-movers', 301);
});


Route::get('/moving-donation', function () {
    return view('miscpages/donation');
});
Route::get('/preparation-for-your-move', function () {
    return view('miscpages/prep');
});
Route::get('/moving-safety', function () {
    return view('miscpages/safety');
});

Route::get('/boston-parking-permit', function () {
    return view('miscpages/permit');
});

Route::get('/flat-rate-movers', function () {
    return view('miscpages/flatrate');
});

Route::get('/appliance-movers-boston', function () {
    return view('miscpages/appliance');
});

Route::get('/our-fleet', function () {
    return view('miscpages/fleet');
});

Route::get('/boston-indianapolis-moving', function () {
    return view('interstatemoving/bostonindi');
});

Route::get('/brighton-moving', function () {
    return view('localmoving/brightonmoving');
});

Route::get('/somerville-moving', [
    'uses' => 'PageController@somervilleMoving'
]);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/{destlink}', ['as' => 'page.single', 'uses' => 'PageController@getSingle'])->where('destlink', '[\w\d\-\_]+');

