<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooController extends Controller
{
    public function foo($playlist, $id)
    {
        dd($playlist, $id);
    }
}
