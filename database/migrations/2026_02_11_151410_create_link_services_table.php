<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('link_services', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->text('keterangan');  
        $table->string('url');
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('link_services');
    }
};
