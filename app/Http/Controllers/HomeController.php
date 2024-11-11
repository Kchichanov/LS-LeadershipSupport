<?php

namespace App\Http\Controllers;

use App\Models\Credit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $credits = Credit::with('borrower')->get();
        return view('welcome', compact('credits'));

    }
}
