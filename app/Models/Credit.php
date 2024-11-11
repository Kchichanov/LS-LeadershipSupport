<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function borrower()
    {
        return $this->belongsTo(Borrower::class);
    }

}
