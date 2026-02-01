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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidat_profile_id')->constrained()->cascadeOnDelete();
            $table->foreignId('job_offer_id')->constrained()->cascadeOnDelete();
            $table->enum('status',['pending','declined','accepted']);
            $table->timestamps();
            $table->unique(['candidat_profile_id','job_offer_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
