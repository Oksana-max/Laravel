<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{

    protected $newsList = [
        [
            'id' => 1,
            'title' => 'News 1',
            'description' => 'descrition News 1'

        ],
        [
            'id' => 2,
            'title' => 'News 2',
            'description' => 'descrition News 2'

        ],
        [
            'id' => 3,
            'title' => 'News 3',
            'description' => 'descrition News 3'

        ]
        ];

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}