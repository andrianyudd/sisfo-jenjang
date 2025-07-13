<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('biodatas', function (Blueprint $table) {
            $table->dropColumn('nim');
        });
    }

    public function down()
    {
        Schema::table('biodatas', function (Blueprint $table) {
            $table->string('nim', 20)->unique()->nullable();
        });
    }
}; 