<?php

namespace App\Http\Controllers;

use App\Models\Credit;
use App\Models\Borrower;
use Illuminate\Http\Request;
use App\Services\CreditService;
use App\Http\Requests\CreditStoreRequest;

class CreditController extends Controller
{

    public function index()
    {
        return view('credit');
    }

    public function store(CreditStoreRequest $request, CreditService $creditService)
    {

        $attributes = $request->validated();
        return $creditService->updateOrCreateCredit($attributes);

    }
}
