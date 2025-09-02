<?php
// database/migrations/xxxx_xx_xx_create_orders_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
                Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('order_code')->unique();
            $table->enum('status', ['pending', 'validated', 'delivered'])->default('pending');// en attente, validée, livrée
            $table->string('phone'); // numéro de téléphone du client pour Fedapay
            $table->decimal('total', 10, 2);
            $table->timestamps();
        });
    }


    

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
