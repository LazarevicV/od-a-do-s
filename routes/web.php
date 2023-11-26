<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\ResursController;
use App\Http\Controllers\KomentarController;

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
    $istaknuti_blogovi = BlogController::istaknuti();
    return view('pocetna', [
        'istaknuti_blogovi' => $istaknuti_blogovi,
        'title' => 'Почетна страница'
    ]);
})->name('pocetna');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/blogovi', [BlogController::class, 'blogovi'])->name('blog.blogovi');

Route::prefix('/blog')->group(function () {
    Route::name('blog.')->group(function () {
        Route::controller(BlogController::class)->group(function () {

            Route::get('/', 'list')->name('index');
            Route::get('/list', 'list')->name('list');

            Route::get('/kategorija/{kategorija}', 'kategorija')->name('kategorija');

            Route::get('/unesi', 'unesi')->name('unesi');
            Route::post('/unesi', 'unesiSubmit')->name('unesiSubmit');

            Route::get('/izmeni/{id}', 'izmeni')->name('izmeni');
            Route::post('/izmeni/{id}', 'izmeniSubmit')->name('izmeniSubmit');

            Route::get('/publish/{id}', 'publish')->name('publish');
            Route::get('/unpublish/{id}', 'unpublish')->name('unpublish');

            Route::get('/istakni/{id}', 'istakni')->name('istakni');
            Route::get('/obrisi_istakni/{id}', 'obrisi_istakni')->name('obrisi_istakni');

            Route::get('/{id}', 'blog')->name('blog');
        });
    });
});

Route::get('alati', [AlatController::class, 'alati'])->name('alat.alati');

Route::prefix('/alat/')->group(function () {
    Route::controller(AlatController::class)->group(function () {
        Route::name('alat.')->group(function () {

            Route::get('', 'list')->name('index');
            Route::get('list', 'list')->name('list');

            Route::get('unesi', 'unesi')->name('unesi');
            Route::post('unesi', 'unesiSubmit')->name('unesiSubmit');

            Route::get('izmeni/{id}', 'izmeni')->name('izmeni');
            Route::post('izmeni/{id}', 'izmeniSubmit')->name('izmeniSubmit');

            Route::get('publish/{id}', 'publish')->name('publish');
            Route::get('unpublish/{id}', 'unpublish')->name('unpublish');
            Route::get('{id}', 'alat')->name('alat');
        });
    });
});

Route::middleware('check_role:admin:user',)->group(function () {
    Route::get('/resursi', [ResursController::class, 'resursi'])->name('resurs.resursi');
});

Route::prefix('/resurs')->group(function () {
    Route::controller(ResursController::class)->group(function () {
        Route::name('resurs.')->group(function () {

            Route::get('/', 'list')->name('index');
            Route::get('/list', 'list')->name('list');

            Route::get('/unesi', 'unesi')->name('unesi');
            Route::post('/unesi', 'unesiSubmit')->name('unesiSubmit');

            Route::get('/izmeni/{id}', 'izmeni')->name('izmeni');
            Route::post('/izmeni/{id}', 'izmeniSubmit')->name('izmeniSubmit');

            Route::get('/publish/{id}', 'publish')->name('publish');
            Route::get('/unpublish/{id}', 'unpublish')->name('unpublish');
            Route::get('/{id}', 'resurs')->name('resurs');
        });
    });
});

Route::prefix('/komentar')->group(function () {
    Route::controller(KomentarController::class)->group(function () {
        Route::name('komentar.')->group(function () {
            Route::get('/', 'list')->name('index');
            Route::get('/list', 'list')->name('list');

            Route::post('/dodaj/{blog_id}', 'dodajSubmit')->name('dodajSubmit');

            Route::get('/publish/{id}', 'publish')->name('publish');
            Route::get('/unpublish/{id}', 'unpublish')->name('unpublish');

            Route::get('/obrisi/{id}', 'obrisi')->name('obrisi');
        });
    });
});


require __DIR__ . '/auth.php';
