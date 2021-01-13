<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Store;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function search(Request $request, $category_id)
    {
        $search = $request->search;
        $category = Category::where('id', $category_id)->first();
        $store = DB::table('stores')
                    ->where('category_id', $category_id)
                    ->where('name', 'like', "%$search%")
                    ->paginate();

        return view('store.store', ['stores' => $store, 'category' => $category]);
    }
}
