<?php

use App\Models\Borrower;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('credits', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Borrower::class)->constrained()->cascadeOnDelete();
            $table->decimal('amount', 10, 2);
            $table->integer('term');
            $table->decimal('monthly_installment', 10, 2);
            $table->decimal('remaining_amount', 10, 2);
            $table->string('credit_code')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credits');
    }
};
