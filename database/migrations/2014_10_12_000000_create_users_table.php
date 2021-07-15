<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_role')->unsigned();
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('email')->unique()->nullable();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('foto')->nullable();
            // $table->rememberToken();
            $table->timestamps();

            // $table->foreign('id_role')
            //     ->references('id')
            //     ->on('role');
        });

        DB::table('user')->insert(
            [[
                'id_role' => '1',
                'nama' => 'admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('1234567'),
            ], [
                'id_role' => '2',
                'nama' => 'user',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('1234567'),

            ]]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
