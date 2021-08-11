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
            'id' => 1.2,
            'title' => 'Категория',
            'description' => 'description News 2'

        ],
        [
            'id' => 1.3,
            'title' => 'Категория',
            'description' => 'description News 3'

        ]
        ];

    public function index (){
        
        return view('news.cat', [
            'catList' => $this -> catList
        ]);
    }

    public function show(int $id)
	{
		$catList = [];
		foreach($this->catList as $news) {
			if($news['id'] === $id) {
				$catList[] = $news;
			}
		}

		if(empty($catList)) {
			abort(404);
		}


		return view('news.articale', [
			'id' => $id
		]);
	}

}

?>