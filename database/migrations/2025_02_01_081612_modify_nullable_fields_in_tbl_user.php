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
        Schema::table('tbl_user', function (Blueprint $table) {
            $table->dateTime('rdate')->nullable()->change();
            $table->string('ccode', 10)->nullable()->change();
            $table->integer('code')->nullable()->change();
            $table->integer('wallet')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_user', function (Blueprint $table) {
            $table->dateTime('rdate')->nullable(false)->change();
            $table->string('ccode', 10)->nullable(false)->change();
            $table->integer('code')->nullable(false)->change();
            $table->integer('wallet')->default(0)->nullable(false)->change();
        });
    }
};
