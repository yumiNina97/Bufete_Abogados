<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('rol_id')->nullable()->after('id');
            $table->foreign('rol_id')->references('id')->on('roles');
            $table->unsignedSmallInteger('login_attempts')->default(0)->after('rol_id');
            $table->string('permisos')->nullable()->after('login_attempts');
            $table->string('nombres')->nullable()->after('permisos');
            $table->string('ap_paterno')->nullable()->after('nombres');
            $table->string('ap_materno')->nullable()->after('ap_paterno');
            $table->string('cedula')->nullable()->after('ap_materno');
            $table->string('direccion')->nullable()->after('cedula');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['rol_id']);

            $table->dropColumn('login_attempts');
            $table->dropColumn('rol_id');
            $table->dropColumn('permisos');
            $table->dropColumn('nombres');
            $table->dropColumn('ap_paterno');
            $table->dropColumn('ap_materno');
            $table->dropColumn('cedula');
            $table->dropColumn('direccion');
        });
    }
};
