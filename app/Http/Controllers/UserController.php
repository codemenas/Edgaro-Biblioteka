<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('home');
    }

    public function read()
    {
        return view('home');
    }

    public function update()
    {
        return view('home');
    }

    public function delete()
    {
        return view('home');
    }

    public function createCategory()
    {
        return view('home');
    }

    public function givePermissions()
    {
        return view('home');
    }
}
