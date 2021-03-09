<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class DashBoardController extends Controller
{
    public function index()
    {
        $data = [];
        return view('backend.index', $data);
    }

    public function post_form(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

    }
}
