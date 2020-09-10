<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooController extends Controller
{
    public function foo($view, $playlist, $id)
    {
        dd($view, $playlist, $id);
    }
}
