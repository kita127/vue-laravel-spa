<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return [
            [
                'id' => 1,
                'name' => 'taro',
            ],
            [
                'id' => 2,
                'name' => 'jiro',
            ],
        ];
    }
}
