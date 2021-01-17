<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Store;
use App\Category;

class ToserbaController extends Controller
{
    public function index()
    {
        $category = Category::where('id', 5)->first();
        $store = Store::where('category_id', 5)->get();

        return view('store.store', ['stores' => $store, 'category' => $category]);
    }

    public function sortToserbaPrice($sort)
    {
        $category = Category::where('id', 5)->first();
        $sort = Store::where('category_id', 5)
                    ->orderBy('price', $sort)
                    ->paginate(2);
        return view('store.store', ['stores' => $sort, 'category' => $category]);
    }

    public function sortToserbaRating($sort)
    {
        $category = Category::where('id', 5)->first();
        $store = Store::join('reviews', 'reviews.store_id', '=', 'stores.id')
            ->orderBy('reviews.rating', $sort)
            ->select('stores.*')
            ->where('stores.category_id', 5)
            ->get();

        return view('store.store', ['stores' => $store, 'category' => $category]);
    }

    public function show($toserba_id)
    {
        $store = Store::find($toserba_id);
        $category = Category::where('id', 5)->first();

        return view('store.store_detail', ['stores' => $store, 'category' => $category]);
    }
}
