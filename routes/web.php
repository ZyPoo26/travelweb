<?php

use App\Admin\Controllers\cartKontrol;
use App\Admin\Controllers\mainuserKontrol;
use App\Admin\Controllers\myprofilKontrol;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tur', function () {
    $gezi = DB::table('gezi')->get();
    $rehberler = DB::table('rehberler')->get();
    return view('Tur', ['gezi' => $gezi, 'rehberler' => $rehberler]);
});
Route::get('/iller', function () {
    $iller = DB::table('iller')->get();return view('destinations', ['iller' => $iller]);
});
Route::get('/liste',function(){
    $city = DB::table('city')->get();return view('listingvone', ['city' => $city]);});

    Route::get('/shop',function(){
        $shop = DB::table('shop')->get();return view('shop', ['shop' => $shop]);});


        Route::get('/myprofil', function () {
            return view('myprofil');  // myprofil sayfasını render et
        })->name('myprofil');

        Route::post('cart/add', [cartKontrol::class, 'addToCart'])->name('cart.add');
        Route::get('cart', [cartKontrol::class, 'viewCart'])->name('cart.index');
        Route::delete('cart/remove/{cartId}', [cartKontrol::class, 'removeFromCart'])->name('cart.remove');



        // Route::get('/iller/{id}',function($id){
        //     $show = DB::table('iller')->find($id);return view('tourdetail', ['show' => $show]);});
        // routes/web.php

        Route::get('/{il_ad}', function($il_ad) {
            $il = DB::table('iller')->where('il_ad', $il_ad)->first(); // il_ad'ye göre şehir bul
            if (!$il) {
                return redirect()->back()->with('error', 'Şehir bulunamadı.');
            }
            $detaylar = DB::table('detay')->where('tur_name', $il->il_ad)->get();
            return view('tourdetail', [
                'il' => $il,
                'detaylar' => $detaylar
            ]);
        })->name('tourdetail');

        Route::post('/giris', [mainuserKontrol::class, 'login'])->name('giris');
        Route::post('/register', [mainuserKontrol::class, 'register'])->name(name: 'register');
        Route::post('/logout', [mainuserKontrol::class, 'logout'])->name('logout');
        Route::post('/updateProfile', [myprofilKontrol::class, 'updateProfile'])->name('updateProfile');
        Route::post('/update-profile-picture', [myprofilKontrol::class, 'updateProfilePicture'])->name('updateProfilePicture');









