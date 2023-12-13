<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('category_offer', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('offers_id')->constrained('offers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::table('category_offer', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropForeign(['offers_id']);
            $table->dropIfExists();
        });

    }
};
