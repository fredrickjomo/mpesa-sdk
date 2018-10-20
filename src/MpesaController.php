<?php

namespace Safaricom\Mpesa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MpesaController extends Controller
{
    //
    public function c2b(){
        $response='Simulating a c2b transaction';
        return view('mpesa::response',compact('response'));
    }
    public function b2c(){
        $response='Simulating a b2c transaction';
        return view('mpesa::response',compact('response'));
    }
}
