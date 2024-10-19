<?php

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/send', function () {

    Mail::to('mahmoud30204050@gmail.com')
        ->send(new TestMail());
    return response('Mail send successfully');

});


//Route::get('/send', function () {
//    try {
//        Mail::to('mahmoud21-02166@student.eelu.edu.eg')->send(new TestMail());
//        return response('Mail sent successfully');
//    } catch (\Exception $e) {
//        return response('Failed to send email: ' . $e->getMessage());
//    }
//});

