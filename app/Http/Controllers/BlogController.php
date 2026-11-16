<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    private function posts()
    {
        return [
            [
                'slug' => 'introduction-to-web-development',
                'title' => 'Introduction to Web Development',
                'category' => 'Web Development',
                'date' => '2026-10-10',
                'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800',
                'excerpt' => 'Learn the basics of web development and understand how modern websites are created.',
                'content' => 'Web development is the process of creating and maintaining websites. It involves several technologies, including HTML, CSS, and JavaScript. Understanding these technologies is an important first step for anyone interested in becoming a web developer.'
            ],
            [
                'slug' => 'getting-started-with-laravel',
                'title' => 'Getting Started with Laravel',
                'category' => 'Programming',
                'date' => '2026-10-15',
                'image' => 'https://images.unsplash.com/photo-1515879218367-8466d910aaa4?w=800',
                'excerpt' => 'Discover Laravel and learn how this PHP framework simplifies web application development.',
                'content' => 'Laravel is a PHP framework designed to make web development easier and more organized. It provides useful features such as routing, controllers, Blade templates, and database management. These features help developers build applications efficiently.'
            ],
            [
                'slug' => 'understanding-kotlin-for-beginners',
                'title' => 'Understanding Kotlin for Beginners',
                'category' => 'Mobile Development',
                'date' => '2026-10-20',
                'image' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=800',
                'excerpt' => 'An introduction to Kotlin and its role in modern Android application development.',
                'content' => 'Kotlin is a modern programming language widely used for Android development. It offers concise syntax, null safety, and interoperability with Java. Beginners can use Kotlin to develop mobile applications and explore modern programming concepts.'
            ],
            [
                'slug' => 'importance-of-ui-ux-design',
                'title' => 'The Importance of UI/UX Design',
                'category' => 'UI/UX Design',
                'date' => '2026-10-25',
                'image' => 'https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?w=800',
                'excerpt' => 'Understand how good UI and UX design can improve the overall user experience.',
                'content' => 'UI and UX design are important parts of application development. UI focuses on the visual appearance of an application, while UX focuses on how users interact with it. Combining both principles helps create products that are attractive and easy to use.'
            ],
            [
                'slug' => 'time-management-for-students',
                'title' => 'Time Management for Students',
                'category' => 'Student Life',
                'date' => '2026-10-30',
                'image' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=800',
                'excerpt' => 'Practical tips to help students organize their schedules and manage academic responsibilities.',
                'content' => 'Time management is an important skill for students. Creating a daily schedule, setting priorities, and breaking large assignments into smaller tasks can make studying more organized. Consistency and discipline also help students balance academic and personal activities.'
            ]
        ];
    }

    public function index()
    {
        $posts = $this->posts();

        return view('blog', compact('posts'));
    }

    public function show($slug)
    {
        $post = collect($this->posts())
            ->firstWhere('slug', $slug);

        abort_if(!$post, 404);

        return view('blog-detail', compact('post'));
    }
}
