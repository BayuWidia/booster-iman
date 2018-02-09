<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMasterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 100)->unique();
            $table->string('nama');
            //default(12345678)
            $table->string('password');
            $table->string('url_foto');
            $table->integer('login_count')->nullable()->default(1);
            // 1 = superadmin; 2 = admin; 3 = user;
            $table->integer('level')->default(1);
            // 1 = aktif; 0 = tidak aktif;
            $table->integer('activated')->default(1);
            $table->string('activation_code')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->rememberToken();
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
        // Schema::dropIfExists('master_users');
    }
}
