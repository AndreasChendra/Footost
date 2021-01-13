<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Store;
use App\Category;

class FoodDrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('store.subfood');
    }

    public function cafe()
    {
        $category = Category::where('id', 1)->first();
        $store = Store::where('category_id', 1)->get();

        return view('store.store', ['stores' => $store, 'category' => $category]);
    }

    public function sortCafePrice($sort)
    {
        $category = Category::where('id', 1)->first();
        $sort = DB::table('stores')
                    ->where('category_id', 1)
                    ->orderBy('price', $sort)
                    ->paginate(2);
        return view('store.store', ['stores' => $sort, 'category' => $category]);
    }

    public function makanan()
    {
        $category = Category::where('id', 2)->first();
        $store = Store::where('category_id', 2)->get();

        return view('store.store', ['stores' => $store, 'category' => $category]);
    }

    public function sortMakananPrice($sort)
    {
        $category = Category::where('id', 2)->first();
        $sort = DB::table('stores')
                    ->where('category_id', 2)
                    ->orderBy('price', $sort)
                    ->paginate(2);
        return view('store.store', ['stores' => $sort, 'category' => $category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cafeDetail($cafe_id)
    {
        $store = Store::find($cafe_id);
        $category = Category::where('id', 1)->first();

        return view('store.store_detail', ['stores' => $store, 'category' => $category]);
    }

    public function foodDetail($food_id)
    {
        $store = Store::find($food_id);
        $category = Category::where('id', 2)->first();

        return view('store.store_detail', ['stores' => $store, 'category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
