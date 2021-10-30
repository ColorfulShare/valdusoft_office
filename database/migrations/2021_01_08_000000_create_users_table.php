<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('slug');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->date('birthdate')->nullable();
            $table->date('admission_date')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('position', [0, 1, 2, 3])->nullable()->comment('0 - Desarrollador, 1 - Diseñador, 2 - Project-Manager, 3 - Financiero');
            $table->unsignedBigInteger('profile_id')->default(0)->comment('0 - Nuevo, 1 - Administrador, 2 - Cliente, 3 - Trabajador');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
        });

        $date = date('Y-m-d H:i:s');

        DB::table('users')->insert([
            ['name' => 'admin', 'last_name' => 'master', 'slug' => 'admin-master', 'email' => 'admin@gmail.com', 'password' => '$2y$10$yfar1ISof2qxLW7nZe6LzuzPyrU/9N9oyHZQqbMSxJQrdIQhj024W', 'position' => 2, 'profile_id' => 1, 'created_at' => $date, 'updated_at' => $date]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
