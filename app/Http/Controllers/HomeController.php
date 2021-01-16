<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Store;
use App\Category;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function search(Request $request, $category_id)
    {
        $search = $request->search;
        $category = Category::where('id', $category_id)->first();
        $store = Store::where('category_id', $category_id)
                    ->where('name', 'like', "%$search%")
                    ->get();
        
        return view('store.store', ['stores' => $store, 'category' => $category]);
    }
}
