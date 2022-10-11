<?php

namespace App\Http\Controllers\common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class commonController extends Controller
{
    public function index()
    {
     
        if (auth()->user()->role == 'customer') {
            return redirect()->route('customer-account');
        } elseif (auth()->user()->role == 'cleaner') {
            return redirect()->route('cleaner-account');
        }
    }
}
