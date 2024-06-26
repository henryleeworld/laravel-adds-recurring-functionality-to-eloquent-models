<?php

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
        Schema::table('repetitions', function (Blueprint $table) {
            $table->string('week_of_month')->nullable()->after('week');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('repetitions', function (Blueprint $table) {
            $table->dropColumn('week_of_month');
        });
    }
};
