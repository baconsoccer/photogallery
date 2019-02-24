<?php



Route::get('/', 'TestController@index');
Route::get('/about', 'TestController@about');
Route::get('/login', 'TestController@login');
Route::get('/register', 'TestController@register');
Route::get('/squad', 'TestController@squad');
//Route::get('/test-Match', 'MatchController@test');

Route::get('/photo-gallery' , 'PhotogalleryController@listPhotos')
    ->name('gallery.photohome');

Route::get('/photo-gallery/add-photo' , 'PhotogalleryController@showPhotoForm')
    ->name('gallery.add_photo');

Route::post('/photo-gallery/add-photo' , 'PhotogalleryController@SavePhotoForm')
    ->name('gallery.save_photo');