<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('Admin.Dashboard');
    }

    public function orders()
    {
        return view('Admin.Orders');
    }

    // Products

    public function index()
    {
        return view('Admin.products.index');
    }

    public function create()
    {
        return view('Admin.products.create');
    }

    public function read()
    {
        return view('Admin.products.Read');
    }

    public function edit()
    {
        return view('Admin.products.edit');
    }

    public function update()
    {
        return view('Admin.products.Update');
    }

    public function show()
    {
        return view('Admin.products.show');
    }
}