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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type')->default('folder');
            $table->string('extension')->nullable();
            $table->string('mime_type')->nullable();
            $table->text('content')->nullable();
            $table->text('comment')->nullable();
            $table->text('compiled')->nullable();
            $table->foreignId('parent_id')->nullable()->constrained('resources')->onDelete('cascade');
            $table->integer('minimum_player_level')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
