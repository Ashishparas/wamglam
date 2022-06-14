<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->text('features')->nullable();
            $table->enum('type',[1,2])->default(1)->comment('1->VIP,2->VIP_Premium');
            $table->enum('status',[1,2,3])->default(1)->comment('1->Bride,2->groom,3->gift');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
