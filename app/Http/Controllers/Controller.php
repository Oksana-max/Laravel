<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
//массив для вывода категорий новостей
protected $catList = [
    [
        'id' => 1,
        'title' => 'Все про спорт',
        'description' => 'Новости о спорте'
    ],
    [
        'id' => 2,
        'title' => 'В мире кино',
        'description' => 'Новости о кино'
    ],
    [
        'id' => 3,
        'title' => 'О политике',
        'description' => 'Новости о политике'
    ],
    [
        'id' => 4,
        'title' => 'Рецепты',
        'description' => 'Новые рецепты'
    ]
    ];



    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}