<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // ID buku
            $table->string('title'); // Judul buku
            $table->text('description'); // Deskripsi buku
            $table->string('category'); // Kategori buku
            $table->boolean('available')->default(true); // Status ketersediaan buku
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
