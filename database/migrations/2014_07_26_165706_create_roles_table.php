<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->smallInteger('permission');
            $table->timestamps();
        });

        DB::table('roles')->insert([
                [
                    'name' => 'user',
                    'permission' => 1
                ],
                [
                    'name' => 'moder',
                    'permission' => 11
                ],
                [
                    'name' => 'admin',
                    'permission' => 101
                ],
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
