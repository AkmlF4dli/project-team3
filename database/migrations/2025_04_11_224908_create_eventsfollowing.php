<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function boot()
    {
	   config(['app.locale' => 'id']);
	   Carbon::setLocale('id');
    }

    public function up(): void
    {
        Schema::create('eventsfollowing', function (Blueprint $table) {
            $table->id();
            $table->string('named');
            $table->date('created_at')->default(Carbon::today()->toDateString());
            $table->integer('event_id');
            $table->string('title');
            $table->longText('description');
            $table->date('dated');
            $table->string('place');
            $table->longText('imaging');
            $table->string('author');
            $table->string('status')->default('active');
            $table->integer('kuota');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventsfollowing');
    }
};
