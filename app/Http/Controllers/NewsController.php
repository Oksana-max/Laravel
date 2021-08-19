<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;


class NewsController extends Controller
{
//массив для вывода конкретной категории
	// protected $newsList = [
    //     [
    //         'id' => 1.1,
    //         'title' => 'Категория',
    //         'description' => 'description News 1'

    //     ],
    //     [
    //         'id' => 1.2,
    //         'title' => 'Категория',
    //         'description' => 'description News 2'

    //     ],
    //     [
    //         'id' => 1.3,
    //         'title' => 'Категория',
    //         'description' => 'description News 3'

    //     ]
    //     ];

    public function index (){

        $model = new News();
    	$newsList = $model->getNews();
		return view('news.cat', [
			'newsList' => $newsList
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