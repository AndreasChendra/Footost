<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\Review;
use App\Category;
use DB;

class KostController extends Controller
{
    public function index()
    {
        $category = Category::where('id', 3)->first();
        $store = Store::where('category_id', 3)->paginate(2);

        return view('store.store', ['stores' => $store, 'category' => $category]);
    }

    public function sortKostPrice($sort)
    {
        $category = Category::where('id', 3)->first();
        $sortPrice = Store::where('category_id', 3)
                    ->orderBy('price', $sort)
                    ->paginate(2);
        return view('store.store', ['stores' => $sortPrice, 'category' => $category]);
    }

    public function sortKostRating($sort)
    {
        $category = Category::where('id', 3)->first();
        $store = Store::join('reviews', 'reviews.store_id', '=', 'stores.id')
            ->orderBy('reviews.rating', $sort)
            ->select('stores.*')
            ->where('stores.category_id', 3)
            ->get();

        return view('store.store', ['stores' => $store, 'category' => $category]);
    }

    public function filterCategory($name)
    {
        $category = Category::where('id', 3)->first();
        $store = Store::where('type', $name)->get();
        return view('store.store', ['stores' => $store, 'category' => $category]);
    }

    public function show($kost_id)
    {
        $store = Store::find($kost_id);
        $category = Category::where('id', 3)->first();
        return view('store.store_detail', ['stores' => $store, 'category' => $category]);
    }
}
