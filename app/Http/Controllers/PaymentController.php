<?php

namespace App\Http\Controllers;

use App\Models\Credit;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {

        $credits = Credit::all();
        return view('payment', compact('credits'));

    }

    public function store(Request $request)
    {

    $request->validate([
        'credit_id' => 'required|exists:credits,id',
        'amount' => 'required|numeric|min:0.01',
    ]);

    $credit = Credit::findOrFail($request->credit_id);

    if($request->amount > $credit->remaining_amount){

        $takenAmount = $credit->remaining_amount;
        $credit->remaining_amount = 0;
        $credit->save();

        return redirect()->back()
        ->withErrors(['amount' => 'The given amount exceeds the remaining amount, only ' . $takenAmount . ' was taken.']);

    }

    $credit->remaining_amount -= $request->amount;
    $credit->save();

    Payment::create([
        'credit_id' => $credit->id,
        'amount' => $request->amount,
    ]);

    return 'Payment added successfully';
 }

}
