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
            $table->integer('tz_offset')->default(0)->after('start_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('repetitions', function (Blueprint $table) {
            $table->dropColumn('tz_offset');
        });
    }
};
