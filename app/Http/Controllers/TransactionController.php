<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Membership;
use App\Transaction;
use Carbon\Carbon;
use App\User;
use Auth;

class TransactionController extends Controller
{

    public function index()
    {
        $transaction = Transaction::paginate(6);

        return view('transaction.viewAllTransaction',['transactions'=>$transaction]);
    }

    public function userindex()
    {
        $transaction = Transaction::select()->where('user_id', Auth::user()->id)->paginate(6);

        return view('transaction.userTransactionHistory',['transactions'=>$transaction]);
    }
    
    public function membership()
    {
        $membership = Membership::all();

        return view('membership.membership',['memberships'=>$membership]);
    }

    
    public function receipt(Request $request)
    {
        $membership = Membership::select()->where('id', $request->input('id'))->first();
        $payment = Payment::all();
        
        return view('membership.paymethod',['payments'=>$payment, 'memberships'=>$membership]);
    }

    public function newTransaction(Request $request)
    {
        $this->validate($request, [
            'payment_id' => ['required'],
        ]);

        Transaction::create([
            'user_id' => $request->input('user_id'),
            'membership_id' => $request->input('membership_id'),
            'payment_id' => $request->input('payment_id'),
        ]);

        $user = User::find($request->input('user_id'));
        $addmonth = Membership::select()->where('id', $request->input('membership_id'))->first();

        if(Carbon::parse($user->vip_expired) < Carbon::now()){
            $user->vip_expired = Carbon::now()->addMonths($addmonth->duration);
        }
        else{
            $user->vip_expired = Carbon::parse($user->vip_expired)->addMonths($addmonth->duration);
        }
        $user->save();

        return redirect("/profile")
            ->with('alert','Your Payment Transaction Successfully.');
    }
}
