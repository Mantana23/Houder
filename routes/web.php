<?php
Route::get('/', function () {
    return view('pages.home');
});

// Route::get('/join-mitra', function () {
//     return view('pages.join-mitra');
// })->name('join-mitra');

// Route::get('/contact', function () {
//     return view('pages.contact');
// })->name('contact');

// Route::get('/faq', function () {
//     return view('pages.faq');
// });

Route::get('/service', function () {
    return view('pages.service');
})->name('service');

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
});

Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about-us');

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/join-mitra','MitraController@index');
Route::post('/join-mitra/create','MitraController@create');

Route::get('/contact', 'KontakController@index');
Route::post('/contact/create', 'KontakController@create');

Route::get('/faq', 'TanyaController@index');
Route::post('/faq/create', 'TanyaController@create');