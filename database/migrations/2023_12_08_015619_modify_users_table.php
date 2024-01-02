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
        Schema::table('users', function (Blueprint $table) {
            
            $table->string('cover_photo')->nullable()->after('remember_token'); //画像のパス
            $table->string('profile_icon')->nullable()->after('cover_photo'); //画像のパス
            $table->string('profile_comment')->nullable()->after('profile_icon');
            $table->text('free_comment')->nullable()->after('profile_comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->dropColumn('cover_photo');
            $table->dropColumn('profile_icon');
            $table->dropColumn('profile_comment');
            $table->dropColumn('free_comment');
        });
    }
};
