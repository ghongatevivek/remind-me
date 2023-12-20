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
        Schema::table('users', function (Blueprint $table) {
            $table->string('mobile',11)->after('email');
            $table->tinyInteger('user_type')->default(1)->comment('0 = Admin, 1 = User')->after('password');
            $table->tinyInteger('status')->default(1)->comment('0 = Deactive, 1 = Active')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumns(['mobile','user_type','status']);
        });
    }
};
