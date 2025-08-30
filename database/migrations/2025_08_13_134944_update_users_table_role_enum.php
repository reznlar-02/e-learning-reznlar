<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Since SQLite doesn't support ALTER TABLE for enum constraints,
        // we need to recreate the table with the new enum values
        
        // First, backup existing data
        $users = DB::table('users')->get();
        
        // Drop the existing table
        Schema::dropIfExists('users');
        
        // Recreate the table with updated enum
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique()->nullable();
            $table->enum('role', ['admin', 'Guru', 'Murid', 'Orang Tua', 'Alumni', 'Guest', 'Super Admin', 'Kepala Sekolah'])->default('Murid');
            $table->enum('status', ['Aktif', 'Tidak Aktif'])->nullable()->default('Aktif');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        
        // Restore the data with updated role values
        foreach ($users as $user) {
            $role = $user->role;
            if ($role === 'Kepala Sekolah') {
                $role = 'Kepala Sekolah';
            }
            if ($role === 'Staf') {
                continue; // Skip staf users as they should be removed
            }
            
            DB::table('users')->insert([
                'id' => $user->id,
                'name' => $user->name,
                'username' => $user->username,
                'role' => $role,
                'status' => $user->status,
                'email' => $user->email,
                'email_verified_at' => $user->email_verified_at,
                'password' => $user->password,
                'remember_token' => $user->remember_token,
                'created_at' => $user->created_at,
                'updated_at' => $user->updated_at,
            ]);
        }
        
        // Reset the auto-increment counter
        DB::statement('DELETE FROM sqlite_sequence WHERE name = "users"');
        DB::statement('INSERT INTO sqlite_sequence (name, seq) VALUES ("users", ' . (DB::table('users')->max('id') ?? 0) . ')');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Backup current data
        $users = DB::table('users')->get();
        
        // Drop the table
        Schema::dropIfExists('users');
        
        // Recreate with old enum
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique()->nullable();
            $table->enum('role', ['admin', 'Guru', 'Murid', 'Orang Tua', 'Alumni', 'Guest', 'Super Admin', 'Kepala Sekolah'])->default('Murid');
            $table->enum('status', ['Aktif', 'Tidak Aktif'])->nullable()->default('Aktif');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        
        // Restore data with old role values
        foreach ($users as $user) {
            $role = $user->role;
            if ($role === 'Kepala Sekolah') {
                $role = 'Kepala Sekolah';
            }
            
            DB::table('users')->insert([
                'id' => $user->id,
                'name' => $user->name,
                'username' => $user->username,
                'role' => $role,
                'status' => $user->status,
                'email' => $user->email,
                'email_verified_at' => $user->email_verified_at,
                'password' => $user->password,
                'remember_token' => $user->remember_token,
                'created_at' => $user->created_at,
                'updated_at' => $user->updated_at,
            ]);
        }
        
        // Reset auto-increment
        DB::statement('DELETE FROM sqlite_sequence WHERE name = "users"');
        DB::statement('INSERT INTO sqlite_sequence (name, seq) VALUES ("users", ' . (DB::table('users')->max('id') ?? 0) . ')');
    }
};
