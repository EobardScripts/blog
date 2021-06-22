<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Dashboard
	public function dashboard() {
		return view('admin.dashboard', [
		    'categories' => Category::lastCategories(5),
            'articles'   => Article::lastArticles(5),
        ]);
	}
}
