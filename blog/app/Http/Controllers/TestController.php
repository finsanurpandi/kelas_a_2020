<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('contents.index');
    }

    public function hello()
    {
        // $fruits = ['mangga', 'jeruk', 'apel'];
        // $message = 'Ini adalah sebuah pesan';

        // return view('contents.hello', compact('fruits', 'message'));

        $data['fruits'] = ['mangga', 'jeruk', 'apel'];
        $data['message'] = 'ini adalah sebuah <strong>pesan</strong>';

        // return view('contents.hello', $data);
        return view('contents.hello')->with($data);
    }
}
