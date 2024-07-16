<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function list()
    {
        return view('pages.role.list');
    }

    public function add()
    {
        return view('pages.role.add');
    }

    public function insert(Request $request)
    {
        dd($request->all());
    }
}