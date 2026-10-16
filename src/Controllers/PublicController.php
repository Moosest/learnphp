<?php

namespace App\Controllers;

class PublicController
{
    public function index()
    {
        $title = 'World';
        $posts = [
            [
                'title' => 'Some World title 1',
                'date' => 'January 1, 2021',
                'author' => 'Pets',
                'body' => 'Some World content 1',
            ],
            [
                'title' => 'Some World title 2',
                'date' => 'January 3, 2021',
                'author' => 'Manivald',
                'body' => 'Some World content 2',
            ],
            [
                'title' => 'Some World title 3',
                'date' => 'January 5, 2021',
                'author' => 'Jorss',
                'body' => 'Some World content 3',
            ],
            [
                'title' => 'Some World title 4',
                'date' => 'January 7, 2021',
                'author' => 'Heli Kopter',
                'body' => 'Some World content 4',
            ],
        ];
        view('index', compact('title', 'posts'));
    }

    public function us()
    {
        $title = 'U.S';
        $posts = [
            [
                'title' => 'Some U.S title 1',
                'date' => 'January 1, 2021',
                'author' => 'Pets',
                'body' => 'Some U.S content 1',
            ],
            [
                'title' => 'Some U.S title 2',
                'date' => 'January 3, 2021',
                'author' => 'Manivald',
                'body' => 'Some U.S content 2',
            ],
            [
                'title' => 'Some U.S title 3',
                'date' => 'January 5, 2021',
                'author' => 'Jorss',
                'body' => 'Some U.S content 3',
            ],
            [
                'title' => 'Some U.S title 4',
                'date' => 'January 7, 2021',
                'author' => 'Heli Kopter',
                'body' => 'Some U.S content 4',
            ],
        ];
        view('us', compact('title', 'posts'));
    }

    public function tech()
    {
        $title = 'Technology';
        $posts = [
            [
                'title' => 'PHP 8.5 pipe operator',
                'date' => 'October 10, 2026',
                'author' => 'Moosest',
                'body' => 'The new |> operator lets you chain function calls from left to right without nesting.',
            ],
            [
                'title' => 'Running MariaDB in Docker',
                'date' => 'October 12, 2026',
                'author' => 'Moosest',
                'body' => 'docker compose makes it easy to spin up a local database for development.',
            ],
            [
                'title' => 'How Composer autoloading works',
                'date' => 'October 14, 2026',
                'author' => 'Moosest',
                'body' => 'PSR-4 autoloading maps namespaces to folders, so classes load without manual require calls.',
            ],
        ];
        view('tech', compact('title', 'posts'));
    }

    public function test()
    {
        $db = new App\DB();
    }

    public function form()
    {
        view('form');
    }

    public function answer()
    {
        dump($_GET, $_POST);
    }
}
