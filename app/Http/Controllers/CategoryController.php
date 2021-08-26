<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller

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




