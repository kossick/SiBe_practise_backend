<?php

namespace App\Models;

use CodeIgniter\Model;

class QuestionModel extends Model
{
    protected $table = 'questions';

    public function getQuestions($id = false)
    { 
        if (! $id)
        {
            return $this->findAll();
        }

        return $this->asArray()
                    ->where(['item_id' => $id])
                    ->first();
    }
}