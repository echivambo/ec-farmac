<?php

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
/*
Route::get('/', function () {
    return view('app');
});
*/

Route::get('/', [\App\Http\Controllers\FarmaciaController::class, 'index1']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('maps', [\App\Http\Controllers\MapsController::class, 'index'])->name('maps');




Route::get('/ec', function(){
    $config = array();
    $config['center'] = 'auto';
    $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
            });
        }
        centreGot = true;';

    app('map')->initialize($config);

    // set up the marker ready for positioning
    // once we know the users location
    $marker = array();
    app('map')->add_marker($marker);

    $map = app('map')->create_map();
    echo "<html><head><script type=\"text/javascript\">var centreGot = false;</script>".$map['js']."</head><body>".$map['html']."</body></html>";
});
