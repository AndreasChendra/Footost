<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promo;
use Carbon\Carbon;

class PromoController extends Controller
{
    public function index()
    {
        $promo = Promo::select()->where('end_date', '>', Carbon::now())->orderBy('end_date', 'DESC')->paginate(10);

        return view('promo.viewPromo',['promos'=>$promo]);
    }

    public function indexall()
    {
        $promo = Promo::orderBy('end_date', 'DESC')->paginate(10);

        return view('promo.viewPromo', ['promos'=>$promo]);
    }

    public function vAddPromo()
    {
        return view('promo.addPromo');
    }

    public function addPromo(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'termncon' => ['required', 'string', 'max:255'],
            'end_date' => ['required', 'date_format:Y-m-d', 'after:yesterday'],
        ]);

        Promo::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'termncon' => $request->input('termncon'),
            'end_date' => $request->input('end_date'),
        ]);

        return redirect('/promo')
        ->with('alert','You have successfully add new Promo.');
    }

    public function vEditPromo(Request $request)
    {
        $promo = Promo::select()->where('id', $request->input('id'))->first();
        $id = $request->input('id');
        return view('promo.editPromo', ['promos'=>$promo, 'promo_id'=>$id]);
    }

    public function editPromo(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'termncon' => ['required', 'string', 'max:255'],
            'end_date' => ['required', 'date_format:Y-m-d', 'after:yesterday'],
        ]);

        $promo = Promo::find($request->input('id'));
        
        $promo->title = $request->input('title');
        $promo->description = $request->input('description');
        $promo->termncon = $request->input('termncon');
        $promo->end_date = $request->input('end_date');
        $promo->save();


        return redirect('/promo')
        ->with('alert','You have successfully updated Promo.');
    }
}
