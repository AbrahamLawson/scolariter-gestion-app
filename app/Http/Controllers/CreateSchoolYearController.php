<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

final class CreateSchoolYearController extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('settings.createSchoolYear');
    }
}
