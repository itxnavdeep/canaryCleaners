<?php

namespace App\Http\Controllers\common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class commonController extends Controller
{
    public function index()
    {
        $user = auth()->user()->role;

        if ($user  == 'customer') {
            $title = array(
                'active' => 'customer-account',
            );
            return view("customer.account", compact('title'));
        } elseif ($user  == 'cleaner') {
            $title = array(
                'active' => 'cleaner-account',
            );
            return view("cleaner.account", compact('title'));
        }
    }
}
