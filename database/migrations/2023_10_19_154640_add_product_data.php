<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::table('products')->insert([
            [
                'name' => 'Produk 1',
                'price' => 100,
                'stock' => 10,
                'description' => 'Deskripsi produk 1'
            ],
            [
                'name' => 'Produk 2',
                'price' => 150,
                'stock' => 5,
                'description' => 'Deskripsi produk 2'
            ],
            [
                'name' => 'Produk 3',
                'price' => 80,
                'stock' => 20,
                'description' => 'Deskripsi produk 3'
            ],
        ]);
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
