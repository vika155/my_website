<?php

namespace App\Http\Controllers;
use Illuminate\View\View;


class CatController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function meow($id)
    {

        return view('test.meow', [
            'someNumber' => 5,
            'meow' => $id
        ]);
    }

    public function scratch($id)
    {

        return view('test.scratch', [
            'someNumber' => 5,
            'scratch' => $id
        ]);
    }

    public function shit($id)
    {

        return view('test.shit', [
            'someNumber' => 5,
            'shit' => $id
        ]);
    }
}


