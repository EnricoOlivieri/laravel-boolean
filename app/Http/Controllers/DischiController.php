<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DischiController extends Controller
{
    public function index(){

        $data = Disco::all();

        dd($data);

        return;
    }
}
