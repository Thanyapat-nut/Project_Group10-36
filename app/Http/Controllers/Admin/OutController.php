<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OutController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    //auth
}
