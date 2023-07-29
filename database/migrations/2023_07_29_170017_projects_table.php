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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->integer("order");
            $table->enum("status",[
                \App\Enums\Status::ACTIVE->value,
                \App\Enums\Status::INACTIVE->value,
                \App\Enums\Status::PROCESSING->value
            ])->default(\App\Enums\Status::PROCESSING->value);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
