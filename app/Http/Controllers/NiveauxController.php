<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class NiveauxController extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('niveaux.list');
    }
}
