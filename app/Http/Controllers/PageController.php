<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        $skills = [
            'HTML & CSS',
            'Java',
            'Kotlin',
            'PHP',
            'Laravel',
            'MySQL',
            'UI/UX Design'
        ];

        return view('about', compact('skills'));
    }

    public function contact()
    {
        return view('contact');
    }
}
