<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{

//массив для вывода конкретной категории

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