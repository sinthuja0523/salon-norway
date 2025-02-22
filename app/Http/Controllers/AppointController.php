<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointController extends Controller
{
    public function appoint(){
        return view('appoint');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
       dd($request);
    }
}
