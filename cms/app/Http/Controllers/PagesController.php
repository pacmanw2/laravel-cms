<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home()
    {
//        $tasks = [
//            'Lift', 'Eat', 'Study', 'Socialize', 'Sleep', 'Cook'
//        ];
//
//        return view('welcome')->with([
//            'tasks' => $tasks,
//            'title' => 'Welcome page'
//        ]);
        return view('welcome');
    }

    function archives()
    {
        return view('archives');
    }

    function about()
    {
        return view('about');
    }

    function contact()
    {
        return view('contact');
    }
}
