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
        Schema::table('features', function (Blueprint $table) {
            $table->string('icon')->nullable(); // to store Font Awesome icon class
        });
    }
    
    public function down()
    {
        Schema::table('features', function (Blueprint $table) {
            $table->dropColumn('icon');
        });
    }
    
};
