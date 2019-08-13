<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\http\Controllers\controller;
use App\User;

class SiteController extends Controller
{
    public function index (){

        return view('site.index');
    }
}
