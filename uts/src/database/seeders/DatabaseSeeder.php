<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat role dan permission jika belum ada
        $viewPermission = Permission::firstOrCreate(['name' => 'view_only']);
        
        $superAdminRole = Role::firstOrCreate(['name' => 'super_admin']);
        $superAdminRole->syncPermissions(Permission::all());

        $beaCukaiRole = Role::firstOrCreate(['name' => 'bea_cukai']);
        $beaCukaiRole->syncPermissions([$viewPermission]);

        // Cek user Admin
        $admin = User::where('email', 'admin@admin.com')->first();
        if (!$admin) {
            $admin = User::factory()->create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'), // sesuaikan password
            ]);
            $admin->assignRole($superAdminRole);
        }

        // Cek user Bea Cukai
        $beaCukai = User::where('email', 'beacukai@example.com')->first();
        if (!$beaCukai) {
            $beaCukai = User::factory()->create([
                'name' => 'Bea Cukai',
                'email' => 'beacukai@example.com',
                'password' => bcrypt('password  '), // ganti sesuai kebutuhan
            ]);
            $beaCukai->assignRole($beaCukaiRole);
        }

        // Jalankan seeder lain
        $this->call([
            ShipmentSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
