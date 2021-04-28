<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view()
    {
        /* Test; ignore
        $response = [
            'question' => 'Here\'s a question for ya...',
        ];

        // TODO: include CI response trait
        header('Content-Type: application/json');
        echo json_encode($response);
        die(); */
    }


}