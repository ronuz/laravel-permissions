<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooController extends Controller
{
    public function foo($view = null, $playlist = null, $id = null)
    {
        dd($view, $playlist, $id, request()->all());
    }
}
