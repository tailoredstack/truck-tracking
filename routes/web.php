<?php

use App\Models\Truck;
use Brackets\AdminListing\Facades\AdminListing;
use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {
    // create and AdminListing instance for a specific model and
    $data = AdminListing::create(Truck::class)->processRequestAndGet(
        // pass the request with params
        $request,

        // set columns to query
        ['color', 'id', 'manufacturer', 'no_of_wheels', 'plate_no', 'type'],

        // set columns to searchIn
        ['color', 'id', 'manufacturer', 'plate_no', 'type']
    );

    if ($request->ajax()) {
        if ($request->has('bulk')) {
            return [
                'bulkItems' => $data->pluck('id')
            ];
        }
        return ['data' => $data];
    }
    return view('welcome', compact('data'));
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::prefix('admin-users')->name('admin-users/')->group(static function () {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::prefix('trucks')->name('trucks/')->group(static function () {
            Route::get('/',                                             'TruckController@index')->name('index');
            Route::get('/create',                                       'TruckController@create')->name('create');
            Route::post('/',                                            'TruckController@store')->name('store');
            Route::get('/{truck}/show',                                 'TruckController@show')->name('show');
            Route::get('/{truck}/edit',                                 'TruckController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'TruckController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{truck}',                                     'TruckController@update')->name('update');
            Route::delete('/{truck}',                                   'TruckController@destroy')->name('destroy');
        });
    });
});
