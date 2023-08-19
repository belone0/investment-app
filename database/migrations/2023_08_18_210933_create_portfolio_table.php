<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('portfolio', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->integer('target_position');
            $table->integer('actual_position');
            $table->integer('total_value');

            $table->timestamps();
        });
    }

};
