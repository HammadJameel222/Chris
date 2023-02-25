<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function index()
    {
        # code...
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);

        $newsletter = Newsletter::create([
            'email' => $request->input('email'),
        ]);

        return redirect()->back();
    }
}
