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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->decimal('totalPayer');
            $table->integer('quantite');
            $table->string('statut')->default(null)->change();
            $table->unsignedBigInteger('idProduit');
            // les cle etranger
            $table->foreign('user_id')
                    ->references('id')->on('users');
             $table->foreign('idProduit')
                    ->references('id')->on('produits');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};



