<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the client side app.
     *
     * @return view
     */
    public function client()
    {
        return view('app');
    }

    /**
     * Show the application dashboard.
     *
     * @return view
     */
    public function admin()
    {
        return view('admin.admin');
    }
    
}
