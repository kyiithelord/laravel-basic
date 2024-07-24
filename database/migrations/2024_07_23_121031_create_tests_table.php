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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('apple');
            $table->text('description')->comment('about Item');  //comment ဘာအတွက်ဆိုပြီးမှတ်တာ
            // $table->integer('age');
            // $table->bigInteger('views')->nullable();  // nullable ဆိုတာက data မပါလည်းရတယ်
            $table->unsignedBigInteger('quantity');
            $table->Integer('price');
            // $table->float('rating');
            // $table->date('published_at');   // YYYY-MM-DD
            // $table->dateTime('created_at');   //YYYY-MM-DD   HH:MM
            // $table->boolean('is_active')->default(false);   // true(1) , false(0) / default က အစတည်းကသတ်မှတ်ပေးလိုက်တာပါ
            // $table->enum('status',['draft','published','achieved']);
            // $table->enum('gender',['male','female']);
            // $table->json('options');
            // $table->binary('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
