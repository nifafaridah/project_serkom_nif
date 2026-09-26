<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasColumn('ekstrakurikuler', 'nama_ekskul')) {
            Schema::table('ekstrakurikuler', function (Blueprint $table) {
                $table->string('nama_ekskul', 100)->nullable();
            });
        }

        if (!Schema::hasColumn('ekstrakurikuler', 'pembina')) {
            Schema::table('ekstrakurikuler', function (Blueprint $table) {
                $table->string('pembina', 100)->nullable();
            });
        }

        if (!Schema::hasColumn('ekstrakurikuler', 'jadwal_latihan')) {
            Schema::table('ekstrakurikuler', function (Blueprint $table) {
                $table->string('jadwal_latihan', 100)->nullable();
            });
        }

        if (!Schema::hasColumn('ekstrakurikuler', 'deskripsi')) {
            Schema::table('ekstrakurikuler', function (Blueprint $table) {
                $table->text('deskripsi')->nullable();
            });
        }

        if (!Schema::hasColumn('ekstrakurikuler', 'gambar')) {
            Schema::table('ekstrakurikuler', function (Blueprint $table) {
                $table->string('gambar')->nullable();
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('ekstrakurikuler', 'nama_ekskul')) {
            Schema::table('ekstrakurikuler', function (Blueprint $table) {
                $table->dropColumn('nama_ekskul');
            });
        }

        if (Schema::hasColumn('ekstrakurikuler', 'pembina')) {
            Schema::table('ekstrakurikuler', function (Blueprint $table) {
                $table->dropColumn('pembina');
            });
        }

        if (Schema::hasColumn('ekstrakurikuler', 'jadwal_latihan')) {
            Schema::table('ekstrakurikuler', function (Blueprint $table) {
                $table->dropColumn('jadwal_latihan');
            });
        }

        if (Schema::hasColumn('ekstrakurikuler', 'deskripsi')) {
            Schema::table('ekstrakurikuler', function (Blueprint $table) {
                $table->dropColumn('deskripsi');
            });
        }

        if (Schema::hasColumn('ekstrakurikuler', 'gambar')) {
            Schema::table('ekstrakurikuler', function (Blueprint $table) {
                $table->dropColumn('gambar');
            });
        }
    }
};
