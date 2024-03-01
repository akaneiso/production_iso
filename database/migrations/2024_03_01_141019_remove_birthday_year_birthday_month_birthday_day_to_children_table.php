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
        Schema::table('children', function (Blueprint $table) {
            $table->dropColumn('birthday_year');
            $table->dropColumn('birthday_month');
            $table->dropColumn('birthday_day');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('children', function (Blueprint $table) {
            $table->smallInteger('birthday_year');
            $table->smallInteger('birthday_month');
            $table->smallInteger('birthday_day');
        });
    }
};
