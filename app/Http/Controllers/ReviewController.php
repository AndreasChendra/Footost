<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Store;
use Auth;

class ReviewController extends Controller
{
    public function index($store_id)
    {
        $store = Store::find($store_id);

        return view('feedback.feedback', ['stores' => $store]);
    }

    public function feedback(Request $request, $store_id)
    {
        $this->validate($request,[
            'description' => ['required', 'string', 'max:255'],
            'rating' => ['required', 'not_in:0'],
            'picture' => ['required', 'file', 'image', 'mimes:jpeg,png,jpg'],
        ]);

        $review = new Review();
        $review->store_id = $store_id;
        $review->user_id = Auth::user()->id;
        $review->description = $request->input('description');
        $review->rating = $request->input('rating');

        if($request->file('picture') != null){
            $file = $request->file('picture');
            $nama_file = time()."_".$file->getClientOriginalName();
    
            $tujuan_upload = 'images/feedback/';
            $file->move($tujuan_upload,$nama_file);
            $review->picture = 'images/feedback/'.$nama_file;
        }

        $review->save();
        return redirect('/home');
    }

    public function vReviewStore($store_id)
    {
        $review = Review::where('store_id', $store_id)->get();

        return view('feedback.store_review', ['reviews' => $review]);
    }
}
