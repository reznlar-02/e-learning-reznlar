<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Remove staf users from users table
        DB::table('users')->where('role', 'Staf')->delete();
        
        // Remove staf role from roles table
        $stafRole = Role::where('name', 'Staf')->first();
        if ($stafRole) {
            $stafRole->delete();
        }
        
        // Remove staf role from model_has_roles table
        DB::table('model_has_roles')->where('role_id', function($query) {
            $query->select('id')->from('roles')->where('name', 'Staf');
        })->delete();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Note: We cannot easily restore deleted users, so this is a one-way migration
        // Only restore the role if needed
        Role::create([
            'name' => 'Staf',
            'guard_name' => 'web'
        ]);
    }
};
