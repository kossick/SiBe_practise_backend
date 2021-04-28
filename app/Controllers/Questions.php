<?php 

namespace App\Controllers;

use App\Models\QuestionModel;
use CodeIgniter\Controller;

use CodeIgniter\HTTP\IncomingRequest;



class Questions extends Controller
{

    public function index()
    {
        $model = new QuestionModel();
        $data = $model->getQuestions();

        // TODO: include CI response trait
        header('Content-Type: application/json');
        
        echo json_encode($data);
    }

    public function view($id = null)
    {
        $model = new QuestionModel();
        $data = $model->getQuestions($id);
        
        // TODO: include CI response trait
        header('Content-Type: application/json');

        echo json_encode($data);
    }

    public function submitAnswer()
    {
        $model = new QuestionModel();

        $request = service('request');

        $answer = $request->getJSON(true);

        $data = [
            'answer' => $answer['answer']
        ];
        $id = $answer['question'];
        $model->update($id, $data);

    }
}