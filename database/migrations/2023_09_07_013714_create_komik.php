<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations
     */
    public function up(): void
    {
        Schema::create('komik', function (Blueprint $table) {
            $table->id();
            $table->string('nama_komik', 50);
            $table->string('author_komik', 20);
            $table->string('img_komik', 60);
            $table->longText('desc_komik');
            $table->date('date_komik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komik', function (Blueprint $table) {
            //
        });
    }
};
