<?php

namespace App\Http\Controllers;

use App\Blog;
use App\SectionTitles;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{

    public function index()
    {
       
        return view('privacy');
    }

   
}
