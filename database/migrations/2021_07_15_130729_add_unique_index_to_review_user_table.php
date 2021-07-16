<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUniqueIndexToReviewUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('review_user')->truncate();

        Schema::table('review_user', function (Blueprint $table) {
            $table->unique(['user_id', 'review_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('review_user', function (Blueprint $table) {
            $table->dropIndex('review_user_user_id_review_id_unique');
        });
    }
}
