<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\DetailStore;

class KostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $store = Store::where('name', 'like', "%$search%")->paginate(2);
        return view('kostan.kost', ['stores' => $store]);
    }

    public function sortPrice($sort)
    {
        $store = Store::get();
        $sort = Store::orderBy('price', $sort)->paginate(2);
        return view('kostan.kost', ['stores' => $sort]);
    }

    public function filterCategory($name)
    {
        $detail = DetailStore::where('category', $name)->first();
        $store = Store::where('id', $detail->store_id)->get();
        return view('kostan.kost', ['details' => $detail, 'stores' => $store]);
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
    public function show($id)
    {
        $store = Store::find($id);
        return view('kostan.kostdetail', ['stores' => $store]);
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
