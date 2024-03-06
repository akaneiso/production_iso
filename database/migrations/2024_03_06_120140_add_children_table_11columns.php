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
            //
            $table->smallInteger('vaccine1')->default(0)->nullable();
            $table->smallInteger('vaccine2')->default(0)->nullable();
            $table->smallInteger('vaccine3')->default(0)->nullable();
            $table->smallInteger('vaccine4')->default(0)->nullable();
            $table->smallInteger('vaccine5')->default(0)->nullable();
            $table->smallInteger('vaccine6')->default(0)->nullable();
            $table->smallInteger('vaccine7')->default(0)->nullable();
            $table->smallInteger('vaccine8')->default(0)->nullable();
            $table->smallInteger('vaccine9')->default(0)->nullable();
            $table->smallInteger('vaccine10')->default(0)->nullable();
            $table->smallInteger('vaccine11')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('children', function (Blueprint $table) {
            //
            $table->dropColumn('vaccine1');
            $table->dropColumn('vaccine2');
            $table->dropColumn('vaccine3');
            $table->dropColumn('vaccine4');
            $table->dropColumn('vaccine5');
            $table->dropColumn('vaccine6');
            $table->dropColumn('vaccine7');
            $table->dropColumn('vaccine8');
            $table->dropColumn('vaccine9');
            $table->dropColumn('vaccine10');
            $table->dropColumn('vaccine11');
        });
    }
};
