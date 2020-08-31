<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function gdrive(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:5',
        ]);

        $pass = $request->input('password');
        if ($pass === "hello") {
            $link = 'https://cataas.com/cat/says/hello';
            return response()->json($link, 200);
        } else if ($pass === "world") {
            $link = 'https://cataas.com/cat/says/world';
            return response()->json($link, 200);
        } else {
            return abort(404, 'Incorrect Password');
        }
    }
}
