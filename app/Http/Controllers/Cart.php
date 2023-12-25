<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cart extends Controller
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

    public function index($id) {
        $user = User::find($id);
        return view('cart.index', ['id' => $id, 'user' => $user]);
    }
}