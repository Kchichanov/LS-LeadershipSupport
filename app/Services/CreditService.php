<?php

namespace App\Services;

use App\Models\Borrower;
use Illuminate\Support\Str;

class CreditService {

    protected $annualInterestRate = 0.079;

    public function calculateMonthlyInstallment($amount, $term)
    {

        $monthlyRate = $this->annualInterestRate / 12;
        $rateFactor = pow(1 + $monthlyRate, $term);

        $monthlyInstallment = $amount * $monthlyRate / (1 - (1 / $rateFactor));

        return round($monthlyInstallment, 2);

    }

    public function updateOrCreateCredit($attributes){

        $borrowerName = strtolower($attributes['first_name'] . ' ' . $attributes['last_name']);

        if(!$borrower = Borrower::firstWhere('name', $borrowerName)){

            $borrower = Borrower::create([

                'name' => $borrowerName,
                'credit_limit' => 80000.00,
                'current_credit' => $attributes['amount'],

            ]);

            $this->createCredit($borrower,$attributes);
            return 'New credit created';
        }

        if($this->checkLimit($borrower, $attributes['amount'])){

            $borrower->current_credit += $attributes['amount'];
            $borrower->save();

            $this->createCredit($borrower, $attributes);

            return 'Credit updated and borrower\'s current credit updated.';

        }

        return 'Limit Reached';

    }

    public function checkLimit($borrower, $amount)
    {
        return ($borrower->current_credit + $amount) <= $borrower->credit_limit;
    }

    public function createCredit(Borrower $borrower, $attributes){

        $monthlyInstallment = $this->calculateMonthlyInstallment($attributes['amount'],$attributes['term']);

        $loanId = (string) Str::orderedUuid();

        $borrower->credits()->create([

            'amount' => $attributes['amount'],
            'term' => $attributes['term'],
            'remaining_amount' => $attributes['amount'],
            'monthly_installment' => $monthlyInstallment,
            'credit_code' => $loanId,

        ]);

    }

}
