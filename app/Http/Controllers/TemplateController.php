<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TemplateController extends Controller
{
    public function index(Request $request): View
    {
        return view('template.index', [
            'user' => $request->user(),
        ]);
    }
}
