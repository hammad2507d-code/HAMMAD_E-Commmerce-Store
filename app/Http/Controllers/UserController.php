<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Home()
    {
        return view('User.Home');
    }

    public function Product()
    {
        return view('User.Product');
    }

    public function Order()
    {
        return view('User.Order');
    }

    public function Checkouts()
    {
        return view('User.Checkouts');
    }

    public function Carts()
    {
        return view('User.Carts');
    }
}