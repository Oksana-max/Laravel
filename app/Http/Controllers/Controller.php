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
            'title' => 'О футболе 1',
            'description' => 'description News 1'

        ],
        [
            'id' => 2,
            'title' => 'О хоккее 2',
            'description' => 'description News 2'

        ],
        [
            'id' => 3,
            'title' => 'О бейсболе 3',
            'description' => 'description News 3'

        ]
        ];

// //массив для вывода категорий новостей
//     protected $CategoryList = [
//         [
//             'id' => 1,
//             'title' => 'Все о спорте',
//         ],
//         [
//             'id' => 2,
//             'title' => 'В мире кино',
//         ],
//         [
//             'id' => 3,
//             'title' => 'Политика',
//         ]
//         ];

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}