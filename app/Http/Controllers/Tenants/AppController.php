<?php

namespace App\Http\Controllers\Tenants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }
    public function index(){
        return view('layouts/app');
    }
}