<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        // admin
        $userData = [
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'info@belajar.com',
            'role' => 'admin',
            'status' => 'Aktif',
            'password' => bcrypt('Bismillah'),
        ];

        $user = User::updateOrCreate(['email' => 'info@belajar.com'], $userData);

        if ($user->wasRecentlyCreated) {
            $this->command->info('Data User ' . $user->name . ' has been saved.');
        } else {
            // Jika data sudah ada dan diperbaharui
            $this->command->info('Data User ' . $user->name . ' has been updated.');
        }

        $user->assignRole('Admin');

        // Super Admin
        $userData = [
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'email' => 'super@belajar.com',
            'role' => 'Super Admin',
            'status' => 'Aktif',
            'password' => bcrypt('Bismillah'),
        ];

        $user = User::updateOrCreate(['email' => 'super@belajar.com'], $userData);

        if ($user->wasRecentlyCreated) {
            $this->command->info('Data User ' . $user->name . ' has been saved.');
        } else {
            // Jika data sudah ada dan diperbaharui
            $this->command->info('Data User ' . $user->name . ' has been updated.');
        }

        $user->assignRole('Super Admin');

        // Kepala Sekolah
        $userData = [
            'name' => 'Kepala Sekolah',
            'username' => 'kepsek',
            'email' => 'kepsek@belajar.com',
            'role' => 'Kepala Sekolah',
            'password' => Hash::make('password'),
        ];
        $user = User::updateOrCreate(['email' => 'kepsek@belajar.com'], $userData);
        if (!$user->hasRole('Kepala Sekolah')) {
            $user->assignRole('Kepala Sekolah');
        }

        // Murid
        $userData = [
            'name' => 'Murid',
            'username' => 'murid',
            'email' => 'murid@belajar.com',
            'role' => 'Murid',
            'status' => 'Aktif',
            'password' => Hash::make('Bismillah'),
        ];

        $user = User::updateOrCreate(['email' => 'murid@belajar.com'], $userData);
        if (!$user->hasRole('Murid')) {
            $user->assignRole('Murid');
        }

        // Guru
        $userData = [
            'name' => 'Guru',
            'username' => 'Guru',
            'email' => 'guru@belajar.com',
            'role' => 'Guru',
            'status' => 'Aktif',
            'password' => bcrypt('Bismillah'),
        ];

        $user = User::updateOrCreate(['email' => 'guru@belajar.com'], $userData);

        if ($user->wasRecentlyCreated) {
            $this->command->info('Data User ' . $user->name . ' has been saved.');
        } else {
            // Jika data sudah ada dan diperbaharui
            $this->command->info('Data User ' . $user->name . ' has been updated.');
        }

        $user->assignRole('Guru');

        // Orang Tua
        $userData = [
            'name' => 'Orang Tua',
            'username' => 'orangtua',
            'email' => 'ortu@belajar.com',
            'role' => 'Orang Tua',
            'status' => 'Aktif',
            'password' => bcrypt('Bismillah'),
        ];

        $user = User::updateOrCreate(['email' => 'ortu@belajar.com'], $userData);

        if ($user->wasRecentlyCreated) {
            $this->command->info('Data User ' . $user->name . ' has been saved.');
        } else {
            // Jika data sudah ada dan diperbaharui
            $this->command->info('Data User ' . $user->name . ' has been updated.');
        }

        $user->assignRole('Orang Tua');

        // Guest
        $userData = [
            'name' => 'Guest',
            'username' => 'guest',
            'email' => 'guest@belajar.com',
            'role' => 'Guest',
            'status' => 'Aktif',
            'password' => bcrypt('Bismillah'),
        ];

        $user = User::updateOrCreate(['email' => 'guest@belajar.com'], $userData);

        if ($user->wasRecentlyCreated) {
            $this->command->info('Data User ' . $user->name . ' has been saved.');
        } else {
            // Jika data sudah ada dan diperbaharui
            $this->command->info('Data User ' . $user->name . ' has been updated.');
        }

        $user->assignRole('Guest');

    }
}
