<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Store;
use App\Category;

class ATKController extends Controller
{
    public function index()
    {
        $category = Category::where('id', 4)->first();
        $store = Store::where('category_id', 4)->get();

        return view('store.store', ['stores' => $store, 'category' => $category]);
    }

    public function sortATKPrice($sort)
    {
        $category = Category::where('id', 4)->first();
        $sort = Store::where('category_id', 4)
                    ->orderBy('price', $sort)
                    ->paginate(2);
        return view('store.store', ['stores' => $sort, 'category' => $category]);
    }

    public function sortATKRating($sort)
    {
        $category = Category::where('id', 4)->first();
        $store = Store::join('reviews', 'reviews.store_id', '=', 'stores.id')
            ->orderBy('reviews.rating', $sort)
            ->select('stores.*')
            ->where('stores.category_id', 4)
            ->get();

        return view('store.store', ['stores' => $store, 'category' => $category]);
    }

    public function show($atk_id)
    {
        $store = Store::find($atk_id);
        $category = Category::where('id', 4)->first();

        return view('store.store_detail', ['stores' => $store, 'category' => $category]);
    }
}
