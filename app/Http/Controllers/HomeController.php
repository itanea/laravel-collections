<?php

namespace App\Http\Controllers;

use App\Method;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function __construct() {
        $this->middleware('auth')->except('index');
    }


    public function index()
    {
        $datas = Method::orderBy('name')->get();
        return view('home.index')->with('datas', $datas);
    }
}
