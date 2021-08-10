<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
//массив для вывода категорий новостей
    protected $catList = [
        [
            'id' => 1,
            'title' => 'Все про спорт'
        ],
        [
            'id' => 2,
            'title' => 'В мире кино'
        ],
        [
            'id' => 3,
            'title' => 'О политике'
        ],
        [
            'id' => 4,
            'title' => 'Рецепты'
        ]
        ];

    public function index (){
        return view('news.category', [
            'catList' => $this -> catList
        ]); 
    }


    public function show(int $id)
	{
		$cat = [];
		foreach($this->cat as $news) {
			if($news['id'] === $id) {
				$cat[] = $news;
			}
		}

		if(empty($cat)) {
			abort(404);
		}


		return view('news.cat', [
			'id' => $id
		]);
	}

} 



