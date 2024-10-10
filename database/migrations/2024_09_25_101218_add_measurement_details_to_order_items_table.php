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
        Schema::table('order_items', function (Blueprint $table) {
            $table->string('bust')->nullable();
            $table->string('waist')->nullable();
            $table->string('hips')->nullable();
            $table->string('neck')->nullable();
            $table->string('chest')->nullable();
            $table->string('shoulder')->nullable();
            $table->string('sleeve')->nullable();
            $table->string('shoulder_floor')->nullable();
            $table->string('arm_hole')->nullable();
            $table->string('upper_arm')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_items', function (Blueprint $table) {
           $table->dropColumn('bust');
           $table->dropColumn('waist');
           $table->dropColumn('hips');
           $table->dropColumn('neck');
           $table->dropColumn('chest');
           $table->dropColumn('shoulder');
           $table->dropColumn('sleeve');
           $table->dropColumn('shoulder_floor');
           $table->dropColumn('arm_hole');
           $table->dropColumn('upper_arm');
        });
    }
};
