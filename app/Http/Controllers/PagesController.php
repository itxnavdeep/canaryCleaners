<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = array(
            'active' => 'home',
        );

        return view('pages.home', compact('title'));
    }
}
