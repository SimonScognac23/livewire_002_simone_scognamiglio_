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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL');
            $table->string('title');
            $table->longText('body');
            $table->string('img')->nullable();
            $table->timestamps();
        });
    }

    // SET NULL va inserito nel caso in cui viene cancellato il riferimento
    // verrà semplicemente segnato come null e non verrà cancellato anche il singolo articolo
    // on indica a quale tabella si sta referendo la foreign key user_id

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
