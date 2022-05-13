<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->text('text');
            $table->foreignId('card_id');
            $table->timestamps();

            $table->foreign('card_id')->references('id')->on('cards');
        });

        Schema::create('notification_subscription', function (Blueprint $table) {
            $table->id();
            $table->foreignId('notification_id');
            $table->foreignId('subscription_id');
            $table->timestamps();
            $table->timestamp('viewed_at');

            $table->foreign('notification_id')->references('id')->on('notifications');
            $table->foreign('subscription_id')->references('id')->on('subscriptions');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notification_subscription');
        Schema::dropIfExists('notifications');
    }
};
