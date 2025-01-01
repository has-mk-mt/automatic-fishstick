<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::dropIfExists('user2s');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('role_user');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
