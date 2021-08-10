<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class NewsController extends Controller
{
//массив для вывода конкретной категории
	protected $newsList = [
        [
            'id' => 1.1,
            'title' => 'Категория',
            'description' => 'description News 1'

        ],
        [
            'id' => 2.1,
            'title' => 'Категория',
            'description' => 'description News 2'

        ],
        [
            'id' => 3.1,
            'title' => 'Категория',
            'description' => 'description News 3'

        ]
        ];

    public function index (){
        
        return view('news.cat', [
            'news' => $this -> newsList
        ]);
    }

    public function show(int $id)
	{
		$newsList = [];
		foreach($this->newsList as $news) {
			if($news['id'] === $id) {
				$newsList[] = $news;
			}
		}

		if(empty($newsList)) {
			abort(404);
		}


		return view('news.articale', [
			'id' => $id
		]);
	}

}

?>