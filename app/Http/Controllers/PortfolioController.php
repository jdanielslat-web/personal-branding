<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'title' => 'StudyBuddy',
                'category' => 'Mobile Application',
                'description' => 'An application designed to help students organize their study activities and manage their learning schedules.',
                'technologies' => ['Kotlin', 'Jetpack Compose', 'Spring Boot'],
                'image' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=800'
            ],
            [
                'title' => 'Stockku',
                'category' => 'Web Development',
                'description' => 'A web-based inventory management system designed to help small businesses manage and monitor their stock.',
                'technologies' => ['PHP', 'MySQL', 'HTML', 'CSS'],
                'image' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800'
            ],
            [
                'title' => 'MindCare',
                'category' => 'Game Development',
                'description' => 'An educational board game concept that introduces mental health awareness through interactive gameplay.',
                'technologies' => ['Game Design', 'UI/UX', 'Illustration'],
                'image' => 'https://images.unsplash.com/photo-1606092195730-5d7b9af1efc5?w=800'
            ]
        ];

        return view('portfolio', compact('projects'));
    }
}
