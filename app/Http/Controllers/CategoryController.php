<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
// //массив для вывода категорий новостей
//     protected $catList = [
//         [
//             'id' => 1,
//             'title' => 'Все про спорт',
//             'description' => 'Новости о спорте'
//         ],
//         [
//             'id' => 2,
//             'title' => 'В мире кино',
//             'description' => 'Новости о кино'
//         ],
//         [
//             'id' => 3,
//             'title' => 'О политике',
//             'description' => 'Новости о политике'
//         ],
//         [
//             'id' => 4,
//             'title' => 'Рецепты',
//             'description' => 'Новые рецепты'
//         ]
//         ];

    public function index (){

        $model = new Category();
		$categories = $model->getCategories();

        return view('news.category', [
        	'categories' => $categories
		]);
    }


    public function show(int $id)
	{
		$categories = [];
		foreach($this->categories as $news) {
			if($news['id'] === $id) {
				$categories[] = $news;
			}
		}

		if(empty($categories)) {
			abort(404);
		}


		return view('news.cat', [
			'id' => $id
		]);
	}

} 




