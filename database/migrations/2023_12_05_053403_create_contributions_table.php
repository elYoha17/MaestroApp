<?php

use App\Models\Activity;
use App\Models\Creditor;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contributions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Creditor::class)->constrained();
            $table->foreignIdFor(Activity::class)->constrained()->cascadeOnDelete();
            $table->decimal('amount', 12, 0);
            $table->timestamps();

            $table->unique(['activity_id', 'creditor_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contributions');
    }
};
