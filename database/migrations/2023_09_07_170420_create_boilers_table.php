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
    Schema::create('boilers', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Boiler name
        $table->string('slug')->unique(); // Boiler slug (for SEO-friendly URLs)
        $table->text('meta_description')->nullable(); // Meta description
        $table->text('meta_keywords')->nullable(); // Meta keywords
        $table->decimal('price', 10, 2); // Price (assuming 10 digits with 2 decimals)
        $table->text('main_description'); // Main description
        $table->text('secondary_description'); // Secondary description
        $table->text('spec_1');
        $table->text('spec_2');
        $table->text('spec_3');
        $table->text('spec_4');
        $table->text('spec_5');
        $table->text('brand');
        $table->text('dimensions');
        $table->text('flow_rate'); // Use underscores
        $table->text('ErP_rating_heating'); // Use underscores
        $table->text('ErP_rating_DHW'); // Use underscores
        $table->text('ErP_efficiency'); // Use underscores
        $table->string('image_1')->nullable(); // Image 1
        $table->string('image_2')->nullable(); // Image 2
        $table->string('image_3')->nullable(); // Image 3
        $table->string('image_4')->nullable(); // Image 4
        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boilers');
    }
};
