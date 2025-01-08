<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function garanty()
    {
        return view('garanty');
    }

    public function installment()
    {
        return view('installment');
    }

}
