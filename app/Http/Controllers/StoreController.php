<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class StoreController extends Controller
{
    public function createStoreView(){
        $category = Category::all();

        return view('shop.create_shop',['categories'=>$category]);
    }
}
