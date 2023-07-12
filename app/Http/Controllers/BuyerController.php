<?php

namespace App\Http\Controllers;
use App\Models\user1;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function customer1()
    {
        return view('hist', [
            "hist1" => user1::all()
        ]);
    }
}
