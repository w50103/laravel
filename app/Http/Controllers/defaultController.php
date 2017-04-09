<?php

namespace App\Http\Controllers;

use Illuminate\Cache;
use Illuminate\Http\Request;

class defaultController extends Controller
{
    //
    public function index(){

        $value = Cache::get('key');
    }
}
