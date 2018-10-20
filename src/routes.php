<?php
Route::get('mpesa', function(){
    echo 'Hello Devs, welcome to safaricom mpesa!';
});
Route::get('c2b', 'Safaricom\Mpesa\MpesaController@c2b');
Route::get('b2c', 'Safaricom\Mpesa\MpesaController@b2c');