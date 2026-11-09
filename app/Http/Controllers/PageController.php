<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function welcome(): View
    {
        return view('welcome');
    }

    public function about(): View
    {
        return view('about');
    }

    public function handleForm(Request $request)
    {
        $request->validate([
            'quick_search' => 'required|min:3',
        ]);

        return back()->with('success', 'Validation passed successfully!');
    }
}