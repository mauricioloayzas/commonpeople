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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('folder');
            $table->longText('name');
            $table->integer("order");
            $table->enum("status",[
                \App\Enums\Status::ACTIVE->value,
                \App\Enums\Status::INACTIVE->value,
            ])->default(\App\Enums\Status::ACTIVE->value);
            $table->unsignedBigInteger('project_id');

            $table->foreign('project_id')->on('projects')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
