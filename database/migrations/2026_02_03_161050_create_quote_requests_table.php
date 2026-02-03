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
        Schema::create('quote_requests', function (Blueprint $table) {
            $table->id();
            $table->string('service_type');
            $table->string('event_type');
            $table->integer('expected_attendees');
            $table->date('event_date');
            $table->string('event_duration');
            $table->string('event_location');
            $table->integer('required_space');
            $table->string('space_type');
            $table->string('budget_range')->nullable();
            $table->text('special_requirements')->nullable();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('company')->nullable();
            $table->boolean('urgent')->default(false);
            $table->string('status')->default('pending'); // pending, reviewed, replied
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quote_requests');
    }
};
