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
        
        $response = [
            'question' => 'Here\'s a question for ya...',
        ];

        // TODO:
        header('Content-Type: application/json');
        echo json_encode($response);
        die();
    }


}