<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Producto extends Migration{
    
    public function up(){
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('producto');
    }
}