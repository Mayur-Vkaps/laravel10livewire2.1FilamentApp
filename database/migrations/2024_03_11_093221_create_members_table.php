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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('desgination')->nullable();
            $table->string('fb_url')->nullable();
            $table->string('tw_url')->nullable();
            $table->string('in_url')->nullable();
            $table->string('image')->nullable();
            $table->integer('status')->default(1)->comment('1=active ,0=deactive');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
