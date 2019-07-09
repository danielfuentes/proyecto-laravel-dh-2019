<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function faqs()
    {
        return view('faqs.faqs');
    }

    
}
