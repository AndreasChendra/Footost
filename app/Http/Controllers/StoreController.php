<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Store;
use App\Review;
use Auth;

class StoreController extends Controller
{
    public function createStoreView(){
        $category = Category::all();

        return view('user.create_store',['categories'=>$category]);
    }

    public function createStore(Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'category' => ['required', 'not_in:0'],
            'address' => ['required', 'string', 'max:255'],
            'price' => ['required', 'int'],
            'description' => ['required', 'string', 'max:255'],
            'picture' => ['file', 'image', 'mimes:jpeg,png,jpg'],
        ]);

        $store = new Store();
        if ($request->input('category') == 'Cafe') {
            $store->category_id = 1;
        } elseif ($request->input('category') == 'Makanan Berat') {
            $store->category_id = 2;
        } elseif ($request->input('category') == 'Kost') {
            $store->category_id = 3;
        } elseif ($request->input('category') == 'Alat Tulis Kantor') {
            $store->category_id = 4;
        } elseif ($request->input('category') == 'Toserba') {
            $store->category_id = 5;
        }
        $store->user_id = Auth::user()->id;
        $store->name = $request->input('name');
        $store->address = $request->input('address');
        $store->type = $request->input('category');
        $store->description = $request->input('description');
        $store->price = $request->input('price');

        if($request->file('picture') != null){
            $file = $request->file('picture');
            $nama_file = time()."_".$file->getClientOriginalName();
    
            if ($request->input('category') == 'Cafe') {
                $tujuan_upload = 'images/foodndrink/cafe';
            } elseif ($request->input('category') == 'Makanan Berat') {
                $tujuan_upload = 'images/foodndrink/makanan';
            } elseif ($request->input('category') == 'Kost') {
                $tujuan_upload = 'images/kostan';
            } elseif ($request->input('category') == 'Alat Tulis Kantor') {
                $tujuan_upload = 'images/atk';
            } elseif ($request->input('category') == 'Toserba') {
                $tujuan_upload = 'images/toserba';
            }
            $file->move($tujuan_upload,$nama_file);
            $store->picture = $tujuan_upload.'/'.$nama_file;
        }

        $store->save();
        return redirect('/home');
    }

    public function vUserStore($user_id)
    {
        $store = Store::where('user_id', $user_id)->get();

        return view('user.view_store', ['stores' => $store]);
    }

    public function dUserStore($store_id)
    {
        $store = Store::findOrFail($store_id);
        $review = Review::where('store_id', $store->id)->get();
        $review->each->delete();
        $store->delete();
        return back();
    }

    public function vUpdateStore($store_id)
    {
        $store = Store::find($store_id);
        return view('user.update_store', ['stores' => $store]);
    }

    public function updateStore(Request $request, $store_id, $category_id)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'price' => ['required', 'int'],
            'description' => ['required', 'string', 'max:255'],
            'picture' => ['file', 'image', 'mimes:jpeg,png,jpg'],
        ]);

        $store = Store::find($store_id);

        $store->category_id = $category_id;
        $store->user_id = Auth::user()->id;
        $store->name = $request->input('name');
        $store->address = $request->input('address');
        if ($category_id == 1) {
            $store->type = 'Cafe';
        } elseif ($category_id == 2) {
            $store->type = 'Makanan Berat';
        } elseif ($category_id == 3) {
            $store->type = 'Kost';
        } elseif ($category_id == 4) {
            $store->type = 'Alat Tulis Kantor';
        } elseif ($category_id == 5) {
            $store->type = 'Toserba';
        }
        $store->price = $request->input('price');
        $store->description = $request->input('description');

        if($request->file('picture') != null){
            $file = $request->file('picture');
            $nama_file = time()."_".$file->getClientOriginalName();
    
            if ($category_id == 1) {
                $tujuan_upload = 'images/foodndrink/cafe';
            } elseif ($category_id == 2) {
                $tujuan_upload = 'images/foodndrink/makanan';
            } elseif ($category_id == 3) {
                $tujuan_upload = 'images/kostan';
            } elseif ($category_id == 4) {
                $tujuan_upload = 'images/atk';
            } elseif ($category_id == 5) {
                $tujuan_upload = 'images/toserba';
            }
            $file->move($tujuan_upload,$nama_file);
            $store->picture = $tujuan_upload.'/'.$nama_file;
        }

        $store->save();
        return redirect('/home');
    }

    public function detailStore($store_id)
    {
        $store = Store::find($store_id);
        return view('user.view_store_detail', ['stores' => $store]);
    }
}
