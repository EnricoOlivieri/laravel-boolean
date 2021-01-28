<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Utente;

class UsersController extends Controller
{
    public function index(){

        $users = Utente::all();

        dd($users);

        return view('users', compact('users'));
    }
}
