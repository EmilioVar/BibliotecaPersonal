<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_users_pivot', function (Blueprint $table) {
            $table->foreignId('book_id')->onDelete("SET NULL")->constrained();
            $table->foreignId('user_id')->onDelete("SET NULL")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books_users_pivot');
    }
};
